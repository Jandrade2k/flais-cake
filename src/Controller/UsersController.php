<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{

    public function index()
    {
        $this->loadModel('Users');
        // $user = $this->Users->get($id)
        // $user = $this->Users->find('all');
        $user = $this->Users->find()
            ->where(['status' => 1])
            ->toArray();

        $this->set(compact('user'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $user = $userTable->newEntity(
                $this->request->getData()
            );

            $user->status = 1;
            $user->created_at = date('Y-m-d H:i:s');
            $user->updated_at = date('Y-m-d H:i:s');

            if ($userTable->save($user)) {
                $this->Flash->success('Usuário salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar Usuário.');
                return $this->redirect(['action' => 'add']);
            }
        }
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('user');

        $user = $this->Users->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$user) {
            $this->Flash->error('Usuário não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('user'));
    }

    public function edit($id = null){
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('user');

        $user = $this->Users->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();



        if (!$user) {
            $this->Flash->error('Usuário não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $user = $userTable->get($id);
            $userTable->patchEntity(
                $user,
                $this->request->getData()
            );

            $user->updated_at = date('Y-m-d H:i:s');

            // dd($user);

            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar Usuário.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }

        $this->set(compact('user'));
    }

    public function delete($id = null){
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $userTable->get($id);
        $userTable->patchEntity(
            $user,
            $this->request->getData()
        );

        $user->updated_at = date('Y-m-d H:i:s');
        $user->status = 0;


        if ($this->Users->save($user)) {
            $this->Flash->success('Usuário excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir Usuário.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
