<?php
namespace Kerogos\DhlPolska\DTO;

class ReceiverAddressData
{
    /**
     * @var string $country
     */
    public $country;

    /**
     * @basetype boolean
     *
     * @var      bool $isPackstation
     */
    public $isPackstation;

    /**
     * @basetype boolean
     *
     * @var      bool $isPostfiliale
     */
    public $isPostfiliale;

    /**
     * @var string $postnummer
     */
    public $postnummer;

    /**
     * @var string $addressType
     */
    public $addressType;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @var string $postalCode
     */
    public $postalCode;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var string $street
     */
    public $street;

    /**
     * @var string $houseNumber
     */
    public $houseNumber;

    /**
     * @var string $apartmentNumber
     */
    public $apartmentNumber;

    /**
     * @var string $contactPerson
     */
    public $contactPerson;

    /**
     * @var string $contactPhone
     */
    public $contactPhone;

    /**
     * @var string $contactEmail
     */
    public $contactEmail;
}
