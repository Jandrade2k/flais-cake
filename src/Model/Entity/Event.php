<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property string $id
 * @property string $name
 * @property string $tipo_id
 * @property string $porposal_id
 * @property \Cake\I18n\FrozenDate $event_date
 * @property \Cake\I18n\FrozenDate $portion_date
 * @property int $qtd_guests
 * @property int $hours
 * @property string $price_van
 * @property string|null $price_hotel
 * @property string|null $price_food
 * @property string $distance
 * @property bool $bv
 * @property bool $royalts
 * @property string $creation_expense
 * @property string $payment_method
 * @property int $qtd_bar
 * @property string $customer_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\EventsTipo $events_tipo
 * @property \App\Model\Entity\Proposal $proposal
 * @property \App\Model\Entity\Customer $customer
 */
class Event extends Entity
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
        'porposal_id' => true,
        'event_date' => true,
        'portion_date' => true,
        'qtd_guests' => true,
        'hours' => true,
        'price_van' => true,
        'price_hotel' => true,
        'price_food' => true,
        'distance' => true,
        'bv' => true,
        'royalts' => true,
        'creation_expense' => true,
        'payment_method' => true,
        'qtd_bar' => true,
        'customer_id' => true,
        'status' => true,
        'created_at' => true,
        'updated_at' => true,
        'events_tipo' => true,
        'proposal' => true,
        'customer' => true,
    ];
}
