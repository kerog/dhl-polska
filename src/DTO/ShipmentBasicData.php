<?php
namespace Kerogos\DhlPolska\DTO;

class ShipmentBasicData
{
    /**
     * @var string $shipmentId
     */
    public $shipmentId;

    /**
     * @var string $created
     */
    public $created;

    /**
     * @var AddressData $shipper
     */
    public $shipper;

    /**
     * @var AddressData $receiver
     */
    public $receiver;

    /**
     * @var string $orderStatus
     */
    public $orderStatus;
}
