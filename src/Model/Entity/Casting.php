<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Casting Entity
 *
 * @property int $id
 * @property string $name
 * @property string $cpf
 * @property string $rg
 * @property string $function
 * @property string $gender
 * @property string $shirt
 * @property string $vest
 * @property string $blazer
 * @property string $gloves
 */
class Casting extends Entity
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
        'cpf' => true,
        'rg' => true,
        'function' => true,
        'gender' => true,
        'shirt' => true,
        'vest' => true,
        'blazer' => true,
        'gloves' => true,
    ];
}
