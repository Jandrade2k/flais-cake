<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Drink Entity
 *
 * @property int $id
 * @property string $name
 * @property int $tipo_id
 * @property string|null $image
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string|null $link
 *
 * @property \App\Model\Entity\EventsTipo $events_tipo
 * @property \App\Model\Entity\Recipe[] $recipes
 */
class Drink extends Entity
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
        'tipo_id' => true,
        'image' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'link' => true,
        'events_tipo' => true,
        'recipes' => true,
    ];
}
