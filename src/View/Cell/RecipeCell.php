<?php

namespace App\View\Cell;

use Cake\View\Cell;

class RecipeCell extends Cell
{
    public function display($id=null)
    {
        $this->loadModel('Recipes');
        if($id) {
            $recipe = $this->Recipes->find()
            ->where(['drink_id'=>$id])
            ->first();
        } else {
            $recipe = null;
        }

        $this->loadModel('Ingredients');
        $ing = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 3])
        ->toArray();

        $gua = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 2])
        ->toArray();

        $cup = $this->Ingredients->find()
        ->where(['status' => 1])
        ->where(['type' => 1])
        ->toArray();

        $this->set(compact('ing', 'gua', 'cup', 'recipe'));
    }
}