<?php
namespace Kerogos\DhlPolska\DTO;

class ReturnShipmentInfo
{
    /**
     * @var string $wayBill
     * @range 0 or more
     */
    public $wayBill;

    /**
     * @var string $serviceType
     * @range 0 or more
     */
    public $serviceType;

    /**
     * @basetype boolean
     *
     * @var      bool $bookCourier
     * @range 0 or more
     */
    public $bookCourier;

    /**
     * @var Billing $billing
     * @range 0 or more
     */
    public $billing;

    /**
     * @var ArrayOfReturnservice $specialServices
     * @range 0 or more
     */
    public $specialServices;

    /**
     * @var ReturnShipmentTime $shipmentTime
     * @range 0 or more
     */
    public $shipmentTime;

    /**
     * @var string $labelType
     * @range 0 or more
     */
    public $labelType;
}
