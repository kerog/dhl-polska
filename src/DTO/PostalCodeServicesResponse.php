<?php
namespace Kerogos\DhlPolska\DTO;

class PostalCodeServicesResponse
{
    /**
     * @basetype boolean
     *
     * @var      bool $domesticExpress9
     */
    public $domesticExpress9;

    /**
     * @basetype boolean
     *
     * @var      bool $domesticExpress12
     */
    public $domesticExpress12;

    /**
     * @basetype boolean
     *
     * @var      bool $deliveryEvening
     */
    public $deliveryEvening;

    /**
     * @basetype boolean
     *
     * @var      bool $pickupOnSaturday
     */
    public $pickupOnSaturday;

    /**
     * @basetype boolean
     *
     * @var      bool $deliverySaturday
     */
    public $deliverySaturday;

    /**
     * @var string $exPickupFrom
     */
    public $exPickupFrom;

    /**
     * @var string $exPickupTo
     */
    public $exPickupTo;

    /**
     * @var string $drPickupFrom
     */
    public $drPickupFrom;

    /**
     * @var string $drPickupTo
     */
    public $drPickupTo;
}
