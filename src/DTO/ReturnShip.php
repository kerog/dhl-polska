<?php
namespace Kerogos\DhlPolska\DTO;

class ReturnShip
{
    /**
     * @var ReturnAddressat $shipper
     * @range 0 or more
     */
    public $shipper;

    /**
     * @var ReturnAddressat $receiver
     * @range 0 or more
     */
    public $receiver;
}
