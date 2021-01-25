<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Carbon\Carbon;

class EventsController extends AppController
{

    public function index($start = null, $end = null)
    {
        $start = $this->request->getData('start');
        $end =$this->request->getData('end');
        
        if ($start == null && $end === null) {
            $this->loadModel('Events');
            // $event = $this->Events->get($id)
            // $event = $this->Events->find('all');
            $this->loadModel('EventsTipos');
            $tipo_eventos = $this->EventsTipos
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

            $this->loadModel('Customers');
            $customer = $this->Customers
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

            $this->loadModel('Proposal');
            $tipo_proposal = $this->Proposal
                ->find('all')
                ->where(['status' => 1])
                ->toArray();
            $event = $this->Events->find()
                ->where(['status' => 1])
                ->toArray();

            $this->set(compact('event', 'tipo_proposal', 'customer', 'tipo_eventos'));
        } else {
            $this->loadModel('Events');
            // $event = $this->Events->get($id)
            // $event = $this->Events->find('all');
            $this->loadModel('EventsTipos');
            $tipo_eventos = $this->EventsTipos
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

            $this->loadModel('Customers');
            $customer = $this->Customers
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

            $this->loadModel('Proposal');
            $tipo_proposal = $this->Proposal
                ->find('all')
                ->where(['status' => 1])
                ->toArray();

            $carbon = new Carbon;
            $s_date = explode('/', $start);

            $e_date = explode('/', $end);

            $event = [];
            $date_e = $carbon::create($e_date[2], $e_date[1], $e_date[0]);
            $date_s = $carbon::create($s_date[2], $s_date[1], $s_date[0]);

            $n = ceil($carbon::parse($date_s)->floatDiffInDays($date_e));

            $event = [];

            for ($i = 0; $i <= $n; $i++) {
                $date_s = $carbon::create($s_date[2], $s_date[1], $s_date[0]);
                $data_f = $date_s->addDays($i);

                $temp = $this->Events->find()
                    ->select(['id', 'name', 'tipo_id', 'event_date'])
                    ->where(['event_date' => $data_f->format('d/m/y')])
                    ->toArray();

                foreach ($temp as $value) {
                    array_push($event, $value);
                }
            }

            $this->set(compact('event', 'tipo_proposal', 'customer', 'tipo_eventos'));
        }
    }

    public function add()
    {
        $this->loadModel('Ingredients');
        $vodka = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 1])->toArray();

        $whisky = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 2])->toArray();

        $gin = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 3])->toArray();

        $aperol = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 4])->toArray();

        $vinho = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 5])->toArray();

        $espumante = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 6])->toArray();

        $this->loadModel('EventsTipos');
        $tipo_eventos = $this->EventsTipos
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Customers');
        $customer = $this->Customers
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


            $rs = $eventTable->save($event);

            if ($rs) {
                $this->Flash->success('Evento salvo com sucesso.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Erro ao salvar Evento.');
                return $this->redirect(['action' => 'add']);
            }
        }
        $this->set(compact('tipo_eventos', 'tipo_proposal', 'customer', 'vodka', 'whisky', 'gin', 'aperol', 'vinho', 'espumante'));
    }

    public function view($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Ingredients');
        $vodka = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 1])->toArray();

        $whisky = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 2])->toArray();

        $gin = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 3])->toArray();

        $aperol = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 4])->toArray();

        $vinho = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 5])->toArray();

        $espumante = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 6])->toArray();

        $this->loadModel('event');

        $this->loadModel('EventsTipos');
        $tipo_eventos = $this->EventsTipos
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Customers');
        $customer = $this->Customers
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Proposal');
        $tipo_proposal = $this->Proposal
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $event = $this->Events->find()
            ->where(['id' => $id])
            ->where(['status' => 1])
            ->first();

        if (!$event) {
            $this->Flash->error('Evento não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('event', 'tipo_eventos', 'tipo_proposal', 'customer', 'vodka', 'whisky', 'gin', 'aperol', 'vinho', 'espumante'));
    }

    public function edit($id = null)
    {
        if ($id == null) {
            $this->redirect(['action' => 'index']);
        }

        $this->loadModel('Ingredients');
        $vodka = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 1])->toArray();

        // dd($vodka[0]->id);

        $whisky = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 2])->toArray();

        $gin = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 3])->toArray();

        $aperol = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 4])->toArray();

        $vinho = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 5])->toArray();

        $espumante = $this->Ingredients
        ->find()
        ->where(['status' => 1])
        ->where(['category' => 6])->toArray();

        $this->loadModel('event');

        $this->loadModel('EventsTipos');
        $tipo_eventos = $this->EventsTipos
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Customers');
        $customer = $this->Customers
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

        $this->loadModel('Proposal');
        $tipo_proposal = $this->Proposal
            ->find('all')
            ->where(['status' => 1])
            ->toArray();

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

            $event->vodka_id = $this->request->getData('vodka_id');
            $event->whisky_id = $this->request->getData('whisky_id');
            $event->gin_id = $this->request->getData('gin_id');
            $event->aperol_id = $this->request->getData('aperol_id');
            $event->vinho_id = $this->request->getData('vinho_id');
            $event->espumante_id = $this->request->getData('espumante_id');

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

        $this->set(compact('event', 'tipo_eventos', 'customer', 'tipo_proposal', 'vodka', 'whisky', 'gin', 'aperol', 'vinho', 'espumante'));
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
