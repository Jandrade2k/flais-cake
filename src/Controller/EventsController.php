<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

class EventsController extends AppController
{

    public function index()
    {
        $this->loadModel('Events');
        // $event = $this->Events->get($id)
        // $event = $this->Events->find('all');
        $event = $this->Events->find()
            ->where(['status' => 1])
            ->toArray();

        $this->set(compact('event'));
    }

    public function add()
    {
        $this->loadModel('EventsTipos');
        $tipo_eventos = $this->EventsTipos
            ->find('all')
            ->where(['status' => 1])
            ->toArray();
            
            $this->loadModel('Proposal');
            $tipo_proposal = $this->Proposal
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

        if ($this->request->is('post')) {
            $eventTable = TableRegistry::getTableLocator()->get('Events');
            $event = $eventTable->newEntity(
                $this->request->getData()
            );

            $event->status = 1;
            $event->created_at = date('Y-m-d H:i:s');
            $event->updated_at = date('Y-m-d H:i:s');

            if ($eventTable->save($event)) {
                $this->Flash->success('Evento salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar Evento.');
                return $this->redirect(['action' => 'add']);
            }
        }
        $this->set(compact('tipo_eventos', 'tipo_proposal'));
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('event');

        $event = $this->Events->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$event) {
            $this->Flash->error('Evento não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('event'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('event');

        $event = $this->Events->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();



        if (!$event) {
            $this->Flash->error('Evento não existe.');
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is('post')) {
            $eventTable = TableRegistry::getTableLocator()->get('Events');
            $event = $eventTable->get($id);
            $eventTable->patchEntity(
                $event,
                $this->request->getData()
            );

            $event->updated_at = date('Y-m-d H:i:s');

            // dd($event);

            if ($this->Events->save($event)) {
                $this->Flash->success('Evento atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao atualizar Evento.');
                return $this->redirect(['action' => 'edit', $id]);
            }
        }

        $this->set(compact('event'));
    }

    public function delete($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $eventTable = TableRegistry::getTableLocator()->get('Events');
        $event = $eventTable->get($id);
        $eventTable->patchEntity(
            $event,
            $this->request->getData()
        );

        $event->updated_at = date('Y-m-d H:i:s');
        $event->status = 0;


        if ($this->Events->save($event)) {
            $this->Flash->success('Evento excluido com sucesso.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Erro ao excluir Evento.');
            return $this->redirect(['action' => 'edit', $id]);
        }
    }
}
