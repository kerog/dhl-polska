<?php
namespace Kerogos\DhlPolska\DTO;

class CreateShipments extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var ArrayOfShipmentfulldata|null $shipments
     */
    public $shipments;
}
