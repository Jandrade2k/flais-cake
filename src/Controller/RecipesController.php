<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class RecipesController extends AppController
{

    public function index()
    {
       
    }

    public function add()
    {
        // FIXME: Tratar para não cadastrar duas receitas pro mesmo drink.
        $this->loadModel('Ingredients');
        $ing = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 3])
        ->toArray();

        $gua = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 2])
        ->toArray();

        $cup = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 1])
        ->toArray();

        $this->loadModel('Recipes');

        $recipe = $this->Recipes->find()
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Drinks');
        $drk = $this->Drinks->find()
        ->where(['id' => $recipe->drink_id])
        ->where(['status' => 1])
        ->toArray();

        if ($this->request->is('post')) {
            $ingredient = $this->request->getData('ingredient');
            $guarrinson = $this->request->getData('guarrinson');
            $recipeTable = TableRegistry::getTableLocator()->get('Recipes');
            $recipe = $recipeTable->newEntity(
                $this->request->getData()
            );

            
            
            $recipe->ing = json_encode($ingredient['id']);
            $recipe->qtd_d = json_encode($ingredient['qtd']);
            $recipe->garrison = json_encode($guarrinson['id']);
            $recipe->qtd_g = json_encode($guarrinson['qtd']);
            
            
            

            $recipe->status = 1;
            $recipe->created_at = date('Y-m-d H:i:s');
            $recipe->updated_at = date('Y-m-d H:i:s');

          
            $save = $recipeTable->save($recipe);

            if ($save) {
                $this->Flash->success('Cliente salvo com sucesso.');
                return $this->redirect(['controller'=> 'drinks','action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar cliente.');
                return $this->redirect([' action' => 'add']);
            }
        }

        $this->set(compact('ing', 'gua', 'cup', 'drk'));
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Recipes');

        $recipe = $this->Recipes->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$recipe) {
            $this->Flash->error('Cliente não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('recipe'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Recipes');

        $recipe = $this->Recipes->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();



        if (!$recipe) {
            $this->Flash->error('Cliente não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $recipeTable = TableRegistry::getTableLocator()->get('Recipes');
            $recipe = $recipeTable->get($id);
            $recipeTable->patchEntity(
                $recipe,
                $this->request->getData()
            );

            $recipe->updated_at = date('Y-m-d H:i:s');

            // dd($recipe);

            if ($this->Recipes->save($recipe)) {
                $this->Flash->success('Cliente atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar cliente.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }

        $this->set(compact('recipe'));
    }

    public function delete($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $recipeTable = TableRegistry::getTableLocator()->get('Recipes');
        $recipe = $recipeTable->get($id);
        $recipeTable->patchEntity(
            $recipe,
            $this->request->getData()
        );

        $recipe->updated_at = date('Y-m-d H:i:s');
        $recipe->status = 0;


        if ($this->Recipes->save($recipe)) {
            $this->Flash->success('Cliente excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir cliente.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
