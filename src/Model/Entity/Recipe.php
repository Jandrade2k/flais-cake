<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipe Entity
 *
 * @property int $id
 * @property string $preparation_mode
 * @property string $ing
 * @property string $qtd_d
 * @property string|null $garrison
 * @property string|null $qtd_g
 * @property string $cup
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $status
 * @property int $drink_id
 *
 * @property \App\Model\Entity\Drink $drink
 */
class Recipe extends Entity
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
        'preparation_mode' => true,
        'ing' => true,
        'qtd_d' => true,
        'garrison' => true,
        'qtd_g' => true,
        'cup' => true,
        'created_at' => true,
        'updated_at' => true,
        'status' => true,
        'drink_id' => true,
        'drink' => true,
    ];
}
