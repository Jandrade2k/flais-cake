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
 * @property int|null $qtd_guests
 * @property int $hours
 * @property string|null $price_van
 * @property string|null $price_hotel
 * @property string|null $price_food
 * @property string|null $distance
 * @property bool|null $bv
 * @property bool|null $royalts
 * @property string|null $creation_expense
 * @property string|null $payment_method
 * @property int $qtd_bar
 * @property int $customer_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property float|null $drinks_guests
 * @property int|null $vodka_id
 * @property int|null $whisky_id
 * @property int|null $gin_id
 * @property int|null $aperol_id
 * @property int|null $vinho_id
 * @property int $espumante_id
 * @property int $bi
 * @property int $unit_id
 * @property string|null $address
 * @property string|null $city
 * @property string $color
 * @property int|null $inicio
 * @property int|null $turno
 * @property string|null $local
 * @property int|null $sexual
 * @property int|null $cerveja
 * @property int|null $spots
 * @property int|null $criacao
 * @property int|null $preferido
 * @property int|null $personalizado
 * @property int|null $gelo_diamante
 * @property int|null $gelo_esfera
 * @property int|null $gelo_cubo
 * @property int|null $gelo_personalizado
 * @property int|null $gelo_flower
 * @property string|null $provisionado
 * @property string|null $sugerido
 * @property string|null $receitapb
 * @property string|null $receitapi
 * @property int|null $etaria
 * @property string|null $classe
 * @property int|null $aperitivo1
 * @property int|null $aperitivo2
 * @property int|null $aperitivo3
 * @property int|null $aperitivo4
 * @property int|null $aperitivo5
 * @property int|null $tonica_id
 * @property int|null $agua_id
 * @property int|null $coco_id
 * @property int|null $saque_id
 * @property int|null $run_id
 * @property int|null $cachaca_id
 * @property string|null $casting_people
 * @property string|null $casting_uniform
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
 * @property \App\Model\Entity\Unit $unit
 * @property \App\Model\Entity\Tonica $tonica
 * @property \App\Model\Entity\Agua $agua
 * @property \App\Model\Entity\Coco $coco
 * @property \App\Model\Entity\Saque $saque
 * @property \App\Model\Entity\Run $run
 * @property \App\Model\Entity\Cachaca $cachaca
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
        'bi' => true,
        'unit_id' => true,
        'address' => true,
        'city' => true,
        'color' => true,
        'inicio' => true,
        'turno' => true,
        'local' => true,
        'sexual' => true,
        'cerveja' => true,
        'spots' => true,
        'criacao' => true,
        'preferido' => true,
        'personalizado' => true,
        'gelo_diamante' => true,
        'gelo_esfera' => true,
        'gelo_cubo' => true,
        'gelo_personalizado' => true,
        'gelo_flower' => true,
        'provisionado' => true,
        'sugerido' => true,
        'receitapb' => true,
        'receitapi' => true,
        'etaria' => true,
        'classe' => true,
        'aperitivo1' => true,
        'aperitivo2' => true,
        'aperitivo3' => true,
        'aperitivo4' => true,
        'aperitivo5' => true,
        'tonica_id' => true,
        'agua_id' => true,
        'coco_id' => true,
        'saque_id' => true,
        'run_id' => true,
        'cachaca_id' => true,
        'casting_people' => true,
        'casting_uniform' => true,
        'events_tipo' => true,
        'proposal' => true,
        'customer' => true,
        'vodka' => true,
        'whisky' => true,
        'gin' => true,
        'aperol' => true,
        'vinho' => true,
        'espumante' => true,
        'unit' => true,
        'tonica' => true,
        'agua' => true,
        'coco' => true,
        'saque' => true,
        'run' => true,
        'cachaca' => true,
    ];
}
