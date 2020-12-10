<?php


namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;


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

            $products = $this->request->getData('products');
            $number = $this->request->getData('number');
            $inventoriesTable = TableRegistry::getTableLocator()->get('Inventories');
            $inventories = $inventoriesTable->newEntity(
                $this->request->getData()
            );

            // dd($this->request->getData());

            $inventories->event = $id;

            $inventories->products = json_encode($products['id']);
            $inventories->number = json_encode($number['id']);
            $inventories->created_at = date('Y-m-d H:i:s');
            $inventories->updated_at = date('Y-m-d H:i:s');


            $save = $inventoriesTable->save($inventories);
            if ($save) {
                $this->Flash->success('Inventário do evento concluido!');
                return $this->redirect(['controller' => 'events', 'action' => 'index']);
            } else {
                $this->Flash->error('Erro ao criar o inventário do evento');
                dd($inventories);
                return $this->redirect(['action' => 'add']);
            }
        }
        $this->set(compact('events', 'drinks'));
    }

    public function view($id = null)
    {
        if ($id != null) {

            $this->loadModel('Events');
            $events = $this->Events->find()
                ->where(['status' => 1])
                ->where(['id' => $id])
                ->first();

            $this->loadModel('Drinks');
            $drinks = $this->Drinks->find()
                ->where(['status' => 1])
                ->toArray();

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
        $this->set(compact('events', 'inventory', 'drinks'));
    }

    public function edit($id = null)
    {
        if ($id != null) {

            $this->loadModel('Inventories');

            $inventory = $this->Inventories->find()
                ->where(['event' => $id])
                ->first();

            $this->loadModel('Events');
            $events = $this->Events->find()
                ->where(['status' => 1])
                ->where(['id' => $id])
                ->first();

            $this->loadModel('Drinks');
            $drinks = $this->Drinks->find()
                ->where(['status' => 1])
                ->toArray();


            if ($inventory == null) {
                return $this->redirect(['action' => 'add', $id]);
            }



            if ($this->request->is('post')) {
                $inventoryTable = TableRegistry::getTableLocator()->get('Inventories');
                $inventories = $inventoryTable->get($id);
                $inventoryTable->patchEntity(
                    $inventories,
                    $this->request->getData()
                );

                $inventories->products = json_encode($this->request->getData('products')['id']);
                $inventories->number = json_encode($this->request->getData('number')['id']);

                if ($this->Inventories->save($inventories)) {
                    $this->Flash->success('Inventário atualizado com sucesso.');
                    return $this->redirect(['action' => 'index', 'controller' => 'events']);
                } else {
                    $this->Flash->error('Erro ao atualizar inventário.');
                    return $this->redirect(['action' => 'edit', $id]);
                }
            }
        } else {
            $this->Flash->error('Erro! Evento não existe.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('events', 'inventory', 'drinks'));
    }

    public function delete($id = null)
    {
    }

    public function pdfGenerator()
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $options = $dompdf->getOptions();
        $options = $dompdf->getOptions();
        $dompdf = new Dompdf($options);

        $htmlBody = '
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    
  </body>
</html>
        ';

        $dompdf->loadHtml($htmlBody);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->set_option('defaultFont', 'Sans-serif');
        $dompdf->set_option('isHtml5ParserEnabled', true);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
