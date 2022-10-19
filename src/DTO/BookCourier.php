<?php
namespace Kerogos\DhlPolska\DTO;

class BookCourier
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var string|null $pickupDate
     */
    public $pickupDate;

    /**
     * @var string|null $pickupTimeFrom
     */
    public $pickupTimeFrom;

    /**
     * @var string|null $pickupTimeTo
     */
    public $pickupTimeTo;

    /**
     * @var string|null $additionalInfo
     */
    public $additionalInfo;

    /**
     * @var ArrayOfString|null $shipmentIdList
     */
    public $shipmentIdList;

    /**
     * @var ShipmentOrderInfo|null $shipmentOrderInfo
     */
    public $shipmentOrderInfo;

    /**
     * @basetype boolean
     *
     * @var      bool|null $courierWithLabel
     */
    public $courierWithLabel;
}
