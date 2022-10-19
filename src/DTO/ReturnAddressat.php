<?php
namespace Kerogos\DhlPolska\DTO;

class ReturnAddressat
{
    /**
     * @var PreavisoContact $preaviso
     * @range 0 or more
     */
    public $preaviso;

    /**
     * @var PreavisoContact $contact
     * @range 0 or more
     */
    public $contact;

    /**
     * @var ShipperAddress $address
     * @range 0 or more
     */
    public $address;
}
