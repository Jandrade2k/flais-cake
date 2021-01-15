<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class CakeView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
    }
    public function pdf($id = null)
    {
        if ($id !== null) {
            $this->loadModel('Events');
            $events = $this->Events->find()
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

            $this->loadModel('Ingredients');
            $ingredients = $this->Ingredients->find()
                ->where(['status' => 1])
                ->toArray();

            $this->loadModel('Recipes');
            $recipes = $this->Recipes->find()
                ->where(['status' => 1])
                ->toArray();

            $html = "";

            $this->viewBuilder()->enableAutoLayout(false);
            $this->viewBuilder()->setClassName('Cake');
            $this->viewBuilder()->setOption(
                'pdfConfig',
                [
                    'orientation' => 'portrait',
                    'download' => true, // This can be omitted if "filename" is specified.
                    'filename' => 'Inventario_' . $events->id . '.pdf' //// This can be omitted if you want file name based on URL.
                ]
            );

            $this->set(compact('drinks', 'inventory', 'ingredients', 'recipes', 'events'));
        }
    }
}
