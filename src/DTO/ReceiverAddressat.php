<?php
namespace Kerogos\DhlPolska\DTO;

class ReceiverAddressat
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
     * @var ReceiverAddress $address
     * @range 0 or more
     */
    public $address;
}
