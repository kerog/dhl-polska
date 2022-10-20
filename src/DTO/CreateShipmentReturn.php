<?php
namespace Kerogos\DhlPolska\DTO;

class CreateShipmentReturn extends BaseDTO
{
    /**
     * @var AuthData $authData
     */
    public $authData;

    /**
     * @var CreateReturnShipmentRequest $shipment
     */
    public $shipment;
}
