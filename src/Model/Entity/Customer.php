<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $contact
 * @property string $cep
 * @property string $place
 * @property string $number
 * @property string|null $complement
 * @property string $city
 * @property string $uf
 * @property string $email
 * @property int|null $status
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property string $cpf
 *
 * @property \App\Model\Entity\Event[] $events
 */
class Customer extends Entity
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
        'phone' => true,
        'contact' => true,
        'cep' => true,
        'place' => true,
        'number' => true,
        'complement' => true,
        'city' => true,
        'uf' => true,
        'email' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'cpf' => true,
        'events' => true,
    ];
}
