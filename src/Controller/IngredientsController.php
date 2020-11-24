<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class IngredientsController extends AppController
{

    public function index()
    {
        $this->loadModel('Ingredients');
        // $customer = $this->Customers->get($id)
        // $customer = $this->Customers->find('all');
        $ingredients = $this->Ingredients->find()
            ->where(['status' => 1])
            ->toArray();

        $this->set(compact('ingredients'));
    }

    public function add()
    {

        if ($this->request->is('post')) {
            $ingredientTable = TableRegistry::getTableLocator()->get('Ingredients');
            $ingredient = $ingredientTable->newEntity(
                $this->request->getData()
            );

            $ingredient->status = 1;
            $ingredient->created_at = date('Y-m-d H:i:s');
            $ingredient->updated_at = date('Y-m-d H:i:s');

            if ($ingredientTable->save($ingredient)) {
                $this->Flash->success('Ingrediente salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar Ingrediente.');
                return $this->redirect(['action' => 'add']);
            }
        }
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Ingredients');

        $ingredient = $this->Ingredients->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$ingredient) {
            $this->Flash->error('Ingrediente não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('ingredient'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Ingredients');

        $ingredient = $this->Ingredients->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$ingredient) {
            $this->Flash->error('Ingredients não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $ingredientTable = TableRegistry::getTableLocator()->get('Ingredients');
            $ingredient = $ingredientTable->get($id);
            $ingredientTable->patchEntity(
                $ingredient,
                $this->request->getData()
            );

            $ingredient->updated_at = date('Y-m-d H:i:s');

            // dd($customer);

            if ($this->Ingredients->save($ingredient)) {
                $this->Flash->success('Ingrediente atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar ingrediente.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }

        $this->set(compact('ingredient'));
    }

    public function delete($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $ingredientTable = TableRegistry::getTableLocator()->get('Ingredients');
        $ingredient = $ingredientTable->get($id);
        $ingredientTable->patchEntity(
            $ingredient,
            $this->request->getData()
        );

        $ingredient->updated_at = date('Y-m-d H:i:s');
        $ingredient->status = 0;


        if ($this->Ingredients->save($ingredient)) {
            $this->Flash->success('Ingrediente excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir ingrediente.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
