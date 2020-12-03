<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use App\Controller\Component\GerenciadorDeArquivos;


class DrinksController extends AppController
{

    public function index()
    {
        $this->loadModel('Drinks');

        $this->loadModel('EventsTipos');
        $tipo = $this->EventsTipos->find()
            ->where(['status' => 1])
            ->toArray();
        // $customer = $this->Customers->get($id)
        // $customer = $this->Customers->find('all');
        $drinks = $this->Drinks->find()
            ->where(['status' => 1])
            ->toArray();

        $this->set(compact('drinks', 'tipo'));
    }

    public function add()
    {
        $this->loadModel('EventsTipos');
        $tipo = $this->EventsTipos->find()
            ->where(['status' => 1])
            ->toArray();

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

        if ($this->request->is('post')) {
            $drinkTable = TableRegistry::getTableLocator()->get('Drinks');
            $drinks = $drinkTable->newEntity(
                $this->request->getData()
            );

            $drinks->status = 1;
            $drinks->created_at = date('Y-m-d H:i:s');
            $drinks->updated_at = date('Y-m-d H:i:s');

            // Verifica se o diretório existe
            if (!is_dir('./upload/drinks/' . $drinks->id)) {
                mkdir('./upload/drinks/' . $drinks->id, 0777, true);
            }

            // dd($this->request->getData());
            $file = $this->request->getData('drinks-file');
            $ext = substr(strtolower(strrchr($file->getClientFilename(), '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
            $setNewFileName = time() . "_" . rand(000000, 999999);
            //prepare the filename for database entry
            $imageFileName = $drinks->id . $setNewFileName . '.' . $ext;

            $target = WWW_ROOT . 'upload/drinks' . DS . $imageFileName;

            if ($imageFileName) {
                $file->moveTo($target);

                $drinks->image = $imageFileName;
            }

            $drinks->name = $this->request->getData('drink-name');
            $drinks->tipo_id = $this->request->getData('drink-tipo_id');

            $link = $this->request->getData('link');

            $embed = explode('v=', $link);

            $drinks->link = $embed[1];

            dd($drinks);

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

            $save = $drinkTable->save($drinks);

            $recipe->drink_id = $save->id;

            if ($drinkTable->save($drinks) && $recipeTable->save($recipe)) {
                $this->Flash->success('Drink salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar drink.');
                return $this->redirect(['action' => 'add']);
            }
        }
        // TODO: Tratar imagem.
        $this->set(compact('tipo', 'ing', 'gua', 'cup'));
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Drinks');

        $this->loadModel('Recipes');
        $recipe = $this->Recipes->find()
            ->where(['status' => 1])
            ->where(['drink_id' => $id])
            ->first();

        if ($recipe == null) {
            // TODO: Inserir cadastro de receita junto ao cadastro de Drink.
            $this->Flash->error('Drink selecionado não tem receita, favor cadastrar.');
            return $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Ingredients');
        $ingredients = $this->Ingredients->find('all')
            ->where(['status' => 1])
            ->toArray();

        // dd($ingredients);

        $drinks = $this->Drinks->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();


        if (!$drinks) {
            $this->Flash->error('Drink não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('drinks', 'recipe', 'ingredients'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadmodel('Recipes');
        $recipe = $this->Recipes->find()
            ->where(['drink_id' => $id])
            ->where(['status' => 1])
            ->first();

        $this->loadmodel('Ingredients');
        $cup = $this->Ingredients->find()
            ->where(['status' => 1])
            ->where(['id' => $recipe->cup])
            ->where(['type' => 1])
            ->first();

        $this->loadModel('Recipes');
        if ($id) {
            $recipe = $this->Recipes->find()
                ->where(['drink_id' => $id])
                ->first();
        } else {
            $recipe = null;
        }

        $this->loadModel('Ingredients');
        $ing = $this->Ingredients->find()
            ->where(['status' => 1])
            ->where(['type' => 3])
            ->toArray();

        $gua = $this->Ingredients->find()
            ->where(['status' => 1])
            ->where(['type' => 2])
            ->toArray();

        $cups = $this->Ingredients->find()
            ->where(['status' => 1])
            ->where(['type' => 1])
            ->toArray();



        // dd($cups);

        $this->loadModel('Drinks');

        $this->loadModel('EventsTipos');
        $tipo = $this->EventsTipos->find()
            ->where(['status' => 1])
            ->toArray();

        $drinks = $this->Drinks->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();



        if (!$drinks) {
            $this->Flash->error('Drink não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $drinkTable = TableRegistry::getTableLocator()->get('Drinks');
            $drinks = $drinkTable->get($id);
            $drinkTable->patchEntity(
                $drinks,
                $this->request->getData()
            );

            $drinks->updated_at = date('Y-m-d H:i:s');

            // dd($customer);
            if (is_dir('./upload/drinks')) {
                @unlink('./upload/drinks/' . $drinks->image);
            }
            $file = $this->request->getData('file');
            if ($file->getClientFilename()) {
                $ext = substr(strtolower(strrchr($file->getClientFilename(), '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                $setNewFileName = time() . "_" . rand(000000, 999999);
                //prepare the filename for database entry
                $imageFileName = $drinks->id . $setNewFileName . '.' . $ext;

                $target = WWW_ROOT . 'upload/drinks' . DS . $imageFileName;

                if ($imageFileName) {
                    $file->moveTo($target);

                    $drinks->image = $imageFileName;
                }
            } else {
                $drinks->image = null;
            }

            $link = $this->request->getData('link');

            $embed = explode('v=', $link);

            $drinks->link = $embed[1];


            $ing_id = $this->Recipes->find()
            ->where(['drink_id' => $id])->first();

            $ingredient = $this->request->getData('ingredient');
            $guarrinson = $this->request->getData('guarrinson');
            $recipeTable = TableRegistry::getTableLocator()->get('Recipes');
            $recipe = $recipeTable->get($ing_id->id);
            $recipeTable->patchEntity(
                $recipe,
                $this->request->getData()
            );

            $recipe->ing = json_encode($ingredient['id']);
            $recipe->qtd_d = json_encode($ingredient['qtd']);
            $recipe->garrison = json_encode($guarrinson['id']);
            $recipe->qtd_g = json_encode($guarrinson['qtd']);

            $recipe->status = 1;
            $recipe->updated_at = date('Y-m-d H:i:s');


            if ($this->Drinks->save($drinks) && $this->Recipes->save($recipe)) {
                $this->Flash->success('Drink atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar drink.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }


        $this->set(compact('drinks', 'tipo', 'recipe', 'cups', 'gua', 'ing'));
    }

    public function delete($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $drinkTable = TableRegistry::getTableLocator()->get('Drinks');
        $drinks = $drinkTable->get($id);
        $drinkTable->patchEntity(
            $drinks,
            $this->request->getData()
        );

        $drinks->updated_at = date('Y-m-d H:i:s');
        $drinks->status = 0;


        if ($this->Drinks->save($drinks)) {
            $this->Flash->success('Drink excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir drink.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
