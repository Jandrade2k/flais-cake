<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $name
 * @property int $tipo_id
 * @property int $porposal_id
 * @property string $event_date
 * @property string $portion_date
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
 * @property int $customer_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property float|null $drinks_guests
 * @property int $vodka_id
 * @property int $whisky_id
 * @property int $gin_id
 * @property int $aperol_id
 * @property int $vinho_id
 * @property int $espumante_id
 *
 * @property \App\Model\Entity\EventsTipo $events_tipo
 * @property \App\Model\Entity\Proposal $proposal
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Vodka $vodka
 * @property \App\Model\Entity\Whisky $whisky
 * @property \App\Model\Entity\Gin $gin
 * @property \App\Model\Entity\Aperol $aperol
 * @property \App\Model\Entity\Vinho $vinho
 * @property \App\Model\Entity\Espumante $espumante
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
        'drinks_guests' => true,
        'vodka_id' => true,
        'whisky_id' => true,
        'gin_id' => true,
        'aperol_id' => true,
        'vinho_id' => true,
        'espumante_id' => true,
        'events_tipo' => true,
        'proposal' => true,
        'customer' => true,
        'vodka' => true,
        'whisky' => true,
        'gin' => true,
        'aperol' => true,
        'vinho' => true,
        'espumante' => true,
    ];
}
