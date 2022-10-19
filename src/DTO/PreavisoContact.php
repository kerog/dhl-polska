<?php
namespace Kerogos\DhlPolska\DTO;

class PreavisoContact
{
    /**
     * @var string $personName
     * @range 0 or more
     */
    public $personName;

    /**
     * @var string $phoneNumber
     * @range 0 or more
     */
    public $phoneNumber;

    /**
     * @var string $emailAddress
     * @range 0 or more
     */
    public $emailAddress;
}
