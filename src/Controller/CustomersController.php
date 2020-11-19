<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class CustomersController extends AppController
{

    public function index()
    {
        $this->loadModel('Customers');
        // $customer = $this->Customers->get($id)
        // $customer = $this->Customers->find('all');
        $customer = $this->Customers->find()
            ->where(['status' => 1])
            ->toArray();

        $this->set(compact('customer'));
    }

    public function add()
    {

        if ($this->request->is('post')) {
            $customerTable = TableRegistry::getTableLocator()->get('Customers');
            $customer = $customerTable->newEntity(
                $this->request->getData()
            );

            $customer->status = 1;
            $customer->created_at = date('Y-m-d H:i:s');
            $customer->updated_at = date('Y-m-d H:i:s');

            if ($customerTable->save($customer)) {
                $this->Flash->success('Cliente salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar cliente.');
                return $this->redirect(['action' => 'add']);
            }
        }
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Customer');

        $customer = $this->Customers->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$customer) {
            $this->Flash->error('Cliente não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('customer'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Customer');

        $customer = $this->Customers->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();



        if (!$customer) {
            $this->Flash->error('Cliente não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $customerTable = TableRegistry::getTableLocator()->get('Customers');
            $customer = $customerTable->get($id);
            $customerTable->patchEntity(
                $customer,
                $this->request->getData()
            );

            $customer->updated_at = date('Y-m-d H:i:s');

            // dd($customer);

            if ($this->Customers->save($customer)) {
                $this->Flash->success('Cliente atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar cliente.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }

        $this->set(compact('customer'));
    }

    public function delete($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $customerTable = TableRegistry::getTableLocator()->get('Customers');
        $customer = $customerTable->get($id);
        $customerTable->patchEntity(
            $customer,
            $this->request->getData()
        );

        $customer->updated_at = date('Y-m-d H:i:s');
        $customer->status = 0;


        if ($this->Customers->save($customer)) {
            $this->Flash->success('Cliente excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir cliente.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
