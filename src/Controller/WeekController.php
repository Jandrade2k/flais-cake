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

class WeekController extends AppController
{
    public function index()
    {
        $carbon = new Carbon;

        $data_i = $carbon::now();

        $event = [];

        for ($i = 0; $i < 8; $i++) {
            $data_f = $carbon::now()->addDays($i);
            $this->loadModel('Events');
            $temp = $this->Events->find()
                ->where(['event_date' => $data_f->format('d/m/y')])
                ->toArray();
            foreach ($temp as $key => $value) {
                array_push($event, $value);
            }
        }
        $this->set(compact('event'));
    }
    public function weekSearch()
    {
        $carbon = new Carbon;

        $start = $this->request->getQuery('start');
        $s_date = explode('/', $start);

        $end = $this->request->getQuery('end');
        $e_date = explode('/', $end);


        $date_e = $carbon::create($e_date[2], $e_date[1], $e_date[0]);
        $date_s = $carbon::create($s_date[2], $s_date[1], $s_date[0]);

        $this->loadModel('Events');
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

        $this->set(array(
            "draw"    => intval($_GET["draw"]),
            "recordsTotal"  =>  count($event),
            "recordsFiltered" => 10,
            "data"    => $event
        ));
        $this->viewBuilder()->setOption('serialize', true);
        $this->RequestHandler->renderAs($this, 'json');
    }
}
