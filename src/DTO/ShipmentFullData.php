<?php
namespace Kerogos\DhlPolska\DTO;

class ShipmentFullData
{
    /**
     * @var AddressData $shipper
     * @range 0 or more
     */
    public $shipper;

    /**
     * @var ReceiverAddressData $receiver
     * @range 0 or more
     */
    public $receiver;

    /**
     * @var NeighbourAddress $neighbour
     * @range 0 or more
     */
    public $neighbour;

    /**
     * @var ArrayOfPiecedefinition $pieceList
     * @range 0 or more
     */
    public $pieceList;

    /**
     * @var PaymentData $payment
     * @range 0 or more
     */
    public $payment;

    /**
     * @var ServiceDefinition $service
     * @range 0 or more
     */
    public $service;

    /**
     * @var string $shipmentDate
     * @range 0 or more
     */
    public $shipmentDate;

    /**
     * @basetype boolean
     *
     * @var      bool $skipRestrictionCheck
     * @range 0 or more
     */
    public $skipRestrictionCheck;

    /**
     * @var string $comment
     * @range 0 or more
     */
    public $comment;

    /**
     * @var string $content
     * @range 0 or more
     */
    public $content;

    /**
     * @var string $reference
     * @range 0 or more
     */
    public $reference;

    /**
     * @var int $shipmentId
     * @range 0 or more
     */
    public $shipmentId;

    /**
     * @var string $created
     * @range 0 or more
     */
    public $created;

    /**
     * @var string $orderStatus
     * @range 0 or more
     */
    public $orderStatus;

    /**
     * @var CustomsData $customs
     * @range 0 or more
     */
    public $customs;

    /**
     * @var string $wayBill
     * @range 0 or more
     */
    public $wayBill;
}
