<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ingredient Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $measures
 * @property string $total
 * @property int|null $category
 * @property int|null $Coluna 10
 * @property float $price
 */
class Ingredient extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'type' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'measures' => true,
        'total' => true,
        'category' => true,
        'Coluna 10' => true,
        'price' => true,
    ];
}
