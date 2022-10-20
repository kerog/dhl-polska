<?php
namespace Kerogos\DhlPolska\DTO;

class DeleteShipments extends  BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var ArrayOfString|null $shipments
     */
    public $shipments;
}
