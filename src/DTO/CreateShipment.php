<?php
namespace Kerogos\DhlPolska\DTO;

class CreateShipment extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var CreateShipmentRequest|null $shipment
     */
    public $shipment;
}
