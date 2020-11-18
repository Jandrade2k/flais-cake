<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

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
        $var = 'Salve';

        $this->set(compact('var'));
    }

    public function view($id)
    {
        $this->loadModel('Customer');

        $customer = $this->Customers->find()
                                    ->where(['id'=> $id])
                                    ->first();
        $this->set(compact('customer'));
    }

    public function edit(){
        $var = 'Salve';

        $this->set(compact('var'));
    }

    public function delete(){
        $var = 'Salve';

        $this->set(compact('var'));
    }
}
