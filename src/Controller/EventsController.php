<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class EventsController extends AppController
{

    public function index()
    {
        $var = 'Salve';

        $this->set(compact('var'));
    }

    public function add()
    {
        $var = 'Salve';

        $this->set(compact('var'));
    }

    public function view()
    {
        $var = 'Salve';

        $this->set(compact('var'));
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
