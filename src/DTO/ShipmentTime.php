<?php
namespace Kerogos\DhlPolska\DTO;

class ShipmentTime
{
    /**
     * @var string $shipmentDate
     * @range 0 or more
     */
    public $shipmentDate;

    /**
     * @var string $shipmentStartHour
     * @range 0 or more
     */
    public $shipmentStartHour;

    /**
     * @var string $shipmentEndHour
     * @range 0 or more
     */
    public $shipmentEndHour;
}
