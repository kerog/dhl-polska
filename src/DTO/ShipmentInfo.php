<?php
namespace Kerogos\DhlPolska\DTO;

class ShipmentInfo
{
    /**
     * @var string $wayBill
     * @range 0 or more
     */
    public $wayBill;

    /**
     * @var string $dropOffType
     * @range 0 or more
     */
    public $dropOffType;

    /**
     * @var string $serviceType
     * @range 0 or more
     */
    public $serviceType;

    /**
     * @var Billing $billing
     * @range 0 or more
     */
    public $billing;

    /**
     * @var ArrayOfService $specialServices
     * @range 0 or more
     */
    public $specialServices;

    /**
     * @var ShipmentTime $shipmentTime
     * @range 0 or more
     */
    public $shipmentTime;

    /**
     * @var string $labelType
     * @range 0 or more
     */
    public $labelType;
}
