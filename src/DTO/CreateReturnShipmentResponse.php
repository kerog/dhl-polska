<?php
namespace Kerogos\DhlPolska\DTO;

class CreateReturnShipmentResponse
{
    /**
     * @var string $shipmentNotificationNumber
     */
    public $shipmentNotificationNumber;

    /**
     * @var string $shipmentTrackingNumber
     */
    public $shipmentTrackingNumber;

    /**
     * @var string $packagesTrackingNumbers
     */
    public $packagesTrackingNumbers;

    /**
     * @var string $dispatchNotificationNumber
     */
    public $dispatchNotificationNumber;

    /**
     * @var Label $label
     */
    public $label;
}
