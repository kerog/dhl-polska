<?php
namespace Kerogos\DhlPolska\DTO;

class Ship
{
    /**
     * @var Addressat $shipper
     * @range 0 or more
     */
    public $shipper;

    /**
     * @var ReceiverAddressat $receiver
     * @range 0 or more
     */
    public $receiver;

    /**
     * @var NeighbourAddress $neighbour
     * @range 0 or more
     */
    public $neighbour;
}
