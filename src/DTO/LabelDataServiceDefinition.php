<?php
namespace Kerogos\DhlPolska\DTO;

class LabelDataServiceDefinition
{
    /**
     * @var string $product
     */
    public $product;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryEvening
     */
    public $deliveryEvening;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryOnSaturday
     */
    public $deliveryOnSaturday;

    /**
     * @basetype boolean
     *
     * @var      bool $pickupOnSaturday
     */
    public $pickupOnSaturday;

    /**
     * @basetype boolean
     *
     * @var      bool $collectOnDelivery
     */
    public $collectOnDelivery;

    /**
     * @var float $collectOnDeliveryValue
     */
    public $collectOnDeliveryValue;

    /**
     * @var string $collectOnDeliveryForm
     */
    public $collectOnDeliveryForm;

    /**
     * @var string $collectOnDeliveryReference
     */
    public $collectOnDeliveryReference;

    /**
     * @basetype boolean
     *
     * @var      bool $insurance
     */
    public $insurance;

    /**
     * @var float $insuranceValue
     */
    public $insuranceValue;

    /**
     * @basetype boolean
     *
     * @var      bool $returnOnDelivery
     */
    public $returnOnDelivery;

    /**
     * @var string $returnOnDeliveryReference
     */
    public $returnOnDeliveryReference;

    /**
     * @basetype boolean
     *
     * @var      bool $proofOfDelivery
     */
    public $proofOfDelivery;

    /**
     * @basetype boolean
     *
     * @var      bool $selfCollect
     */
    public $selfCollect;

    /**
     * @basetype boolean
     *
     * @var      bool $predeliveryInformation
     */
    public $predeliveryInformation;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryToNeighbour
     */
    public $deliveryToNeighbour;
}
