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
                foreach($temp as $key => $value) {
                    array_push($event, $value);
                }
        }
        $this->set(compact('event'));
    }
}
