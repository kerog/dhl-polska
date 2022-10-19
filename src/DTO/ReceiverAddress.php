<?php
namespace Kerogos\DhlPolska\DTO;

class ReceiverAddress
{
    /**
     * @var string $country
     * @range 0 or more
     */
    public $country;

    /**
     * @basetype boolean
     *
     * @var      bool $isPackstation
     * @range 0 or more
     */
    public $isPackstation;

    /**
     * @basetype boolean
     *
     * @var      bool $isPostfiliale
     * @range 0 or more
     */
    public $isPostfiliale;

    /**
     * @var string $postnummer
     * @range 0 or more
     */
    public $postnummer;

    /**
     * @var string $addressType
     * @range 0 or more
     */
    public $addressType;

    /**
     * @var string $name
     * @range 0 or more
     */
    public $name;

    /**
     * @var string $postalCode
     * @range 0 or more
     */
    public $postalCode;

    /**
     * @var string $city
     * @range 0 or more
     */
    public $city;

    /**
     * @var string $street
     * @range 0 or more
     */
    public $street;

    /**
     * @var string $houseNumber
     * @range 0 or more
     */
    public $houseNumber;

    /**
     * @var string $apartmentNumber
     * @range 0 or more
     */
    public $apartmentNumber;
}
