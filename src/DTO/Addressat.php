<?php
namespace Kerogos\DhlPolska\DTO;

class Addressat
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
     * @var Address $address
     * @range 0 or more
     */
    public $address;
}
