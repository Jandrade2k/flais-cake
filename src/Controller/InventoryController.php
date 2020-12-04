<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class InventoryController extends AppController
{

    public function index()
    {
    }

    public function add($id = null)
    {
        $this->loadModel('Inventories');
        $this->loadModel('Drinks');
        $this->loadModel('Events');

        $events = $this->Events->find()
        ->where(['status' => 1])
        ->where(['id' => $id])
        ->first();

        $drinks = $this->Drinks->find()
        ->where(['status' => 1])
        ->toArray();

        if ($this->request->is('post')) {
            $inventoriesTable = TableRegistry::getTableLocator()->get('Events');
            $inventories = $inventoriesTable->newEntity(
                $this->request->getData()
            );

            $inventories->events = $id;

            // dd($inventories);
        }
        $this->set(compact('events', 'drinks'));
    }

    public function view($id = null)
    {
    }

    public function edit($id = null)
    {
        if ($id != null) {

            $this->loadModel('Inventories');

            $inventory = $this->Inventories->find()
                ->where(['event' => $id])
                ->first();


            if ($inventory == null) {
                return $this->redirect(['action' => 'add', $id]);
            }
        } else {
            $this->Flash->error('Erro! Evento não existe.');
            return $this->redirect(['action' => 'index']);
        }
    }

    public function delete($id = null)
    {
    }
}
