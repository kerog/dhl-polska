<?php
namespace Kerogos\DhlPolska\DTO;

class ShipperAddress
{
    /**
     * @var string $country
     * @range 0 or more
     */
    public $country;

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
