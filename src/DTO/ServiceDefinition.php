<?php
namespace Kerogos\DhlPolska\DTO;

class ServiceDefinition
{
    /**
     * @var string $product
     * @range 0 or more
     */
    public $product;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryEvening
     * @range 0 or more
     */
    public $deliveryEvening;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryOnSaturday
     * @range 0 or more
     */
    public $deliveryOnSaturday;

    /**
     * @basetype boolean
     *
     * @var      bool $pickupOnSaturday
     * @range 0 or more
     */
    public $pickupOnSaturday;

    /**
     * @basetype boolean
     *
     * @var      bool $collectOnDelivery
     * @range 0 or more
     */
    public $collectOnDelivery;

    /**
     * @var float $collectOnDeliveryValue
     * @range 0 or more
     */
    public $collectOnDeliveryValue;

    /**
     * @var string $collectOnDeliveryForm
     * @range 0 or more
     */
    public $collectOnDeliveryForm;

    /**
     * @var string $collectOnDeliveryReference
     * @range 0 or more
     */
    public $collectOnDeliveryReference;

    /**
     * @basetype boolean
     *
     * @var      bool $insurance
     * @range 0 or more
     */
    public $insurance;

    /**
     * @var float $insuranceValue
     * @range 0 or more
     */
    public $insuranceValue;

    /**
     * @basetype boolean
     *
     * @var      bool $returnOnDelivery
     * @range 0 or more
     */
    public $returnOnDelivery;

    /**
     * @var string $returnOnDeliveryReference
     * @range 0 or more
     */
    public $returnOnDeliveryReference;

    /**
     * @basetype boolean
     *
     * @var      bool $proofOfDelivery
     * @range 0 or more
     */
    public $proofOfDelivery;

    /**
     * @basetype boolean
     *
     * @var      bool $selfCollect
     * @range 0 or more
     */
    public $selfCollect;

    /**
     * @basetype boolean
     *
     * @var      bool $predeliveryInformation
     * @range 0 or more
     */
    public $predeliveryInformation;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryToNeighbour
     * @range 0 or more
     */
    public $deliveryToNeighbour;

    /**
     * @basetype boolean
     *
     * @var      bool $preaviso
     * @range 0 or more
     */
    public $preaviso;

    /**
     * @basetype boolean
     *
     * @var      bool $additionalService
     * @range 0 or more
     */
    public $additionalService;
}
