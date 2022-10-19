<?php
namespace Kerogos\DhlPolska\DTO;

class CustomsData
{
    /**
     * @var string $customsType
     * @range 0 or more
     */
    public $customsType;

    /**
     * @var string $firstName
     * @range 0 or more
     */
    public $firstName;

    /**
     * @var string $secondaryName
     * @range 0 or more
     */
    public $secondaryName;

    /**
     * @var string $costsOfShipment
     * @range 0 or more
     */
    public $costsOfShipment;

    /**
     * @var string $currency
     * @range 0 or more
     */
    public $currency;

    /**
     * @var string $nipNr
     * @range 0 or more
     */
    public $nipNr;

    /**
     * @var string $eoriNr
     * @range 0 or more
     */
    public $eoriNr;

    /**
     * @var string $vatRegistrationNumber
     * @range 0 or more
     */
    public $vatRegistrationNumber;

    /**
     * @var string $categoryOfItem
     * @range 0 or more
     */
    public $categoryOfItem;

    /**
     * @var string $invoiceNr
     * @range 0 or more
     */
    public $invoiceNr;

    /**
     * @var string $invoice
     * @range 0 or more
     */
    public $invoice;

    /**
     * @var string $invoiceDate
     * @range 0 or more
     */
    public $invoiceDate;

    /**
     * @var string $countryOfOrigin
     * @range 0 or more
     */
    public $countryOfOrigin;

    /**
     * @var string $additionalInfo
     * @range 0 or more
     */
    public $additionalInfo;

    /**
     * @var string $grossWeight
     * @range 0 or more
     */
    public $grossWeight;

    /**
     * @var ArrayOfCustomsitemdata $customsItem
     * @range 0 or more
     */
    public $customsItem;

    /**
     * @var CustomsAgreementData $customAgreements
     * @range 0 or more
     */
    public $customAgreements;
}
