<?php
namespace Kerogos\DhlPolska\DTO;

class ReturnParam
{
    /**
     * @var string $countryCode
     */
    public $countryCode;

    /**
     * @var string $product
     */
    public $product;

    /**
     * @var string $pieceHeader
     */
    public $pieceHeader;

    /**
     * @var string $routing
     */
    public $routing;

    /**
     * @var string $code2l
     */
    public $code2l;

    /**
     * @basetype boolean
     *
     * @var      bool $courierAvailable
     */
    public $courierAvailable;

    /**
     * @var float $courierMaxWeight
     */
    public $courierMaxWeight;

    /**
     * @var int $courierMaxWidth
     */
    public $courierMaxWidth;

    /**
     * @var int $courierMaxHeight
     */
    public $courierMaxHeight;

    /**
     * @var int $courierMaxLength
     */
    public $courierMaxLength;

    /**
     * @var int $courierMaxCod
     */
    public $courierMaxCod;

    /**
     * @basetype boolean
     *
     * @var      bool $courierNstAvailable
     */
    public $courierNstAvailable;

    /**
     * @var int $maxNst
     */
    public $maxNst;

    /**
     * @var int $maxGirth
     */
    public $maxGirth;

    /**
     * @basetype boolean
     *
     * @var      bool $packstationAvailable
     */
    public $packstationAvailable;

    /**
     * @var float $packstationMaxWeight
     */
    public $packstationMaxWeight;

    /**
     * @var int $packstationMaxWidth
     */
    public $packstationMaxWidth;

    /**
     * @var int $packstationMaxHeight
     */
    public $packstationMaxHeight;

    /**
     * @basetype boolean
     *
     * @var      bool $packstationNstAvailable
     */
    public $packstationNstAvailable;

    /**
     * @var int $packstationMaxLength
     */
    public $packstationMaxLength;

    /**
     * @basetype boolean
     *
     * @var      bool $postfilialeAvailable
     */
    public $postfilialeAvailable;

    /**
     * @var float $postfilialeMaxWeight
     */
    public $postfilialeMaxWeight;

    /**
     * @var int $postfilialeMaxWidth
     */
    public $postfilialeMaxWidth;

    /**
     * @var int $postfilialeMaxHeight
     */
    public $postfilialeMaxHeight;

    /**
     * @basetype boolean
     *
     * @var      bool $postfilialeNstAvailable
     */
    public $postfilialeNstAvailable;

    /**
     * @var int $postfilialeMaxLength
     */
    public $postfilialeMaxLength;

    /**
     * @var string $zipFormat
     */
    public $zipFormat;
}
