<?php
namespace Kerogos\DhlPolska\DTO;

class ItemToLabelDataResponse
{
    /**
     * @var string $shipmentId
     * @range 0 or more
     */
    public $shipmentId;

    /**
     * @var string $primaryWaybillNumber
     * @range 0 or more
     */
    public $primaryWaybillNumber;

    /**
     * @var string $dispatchNotificationNumber
     * @range 0 or more
     */
    public $dispatchNotificationNumber;

    /**
     * @var string $labelHeader
     * @range 0 or more
     */
    public $labelHeader;

    /**
     * @var string $content
     * @range 0 or more
     */
    public $content;

    /**
     * @var string $comment
     * @range 0 or more
     */
    public $comment;

    /**
     * @var string $reference
     * @range 0 or more
     */
    public $reference;

    /**
     * @var Billing $billing
     * @range 0 or more
     */
    public $billing;

    /**
     * @var ShipmentTimeLabelData $shipmentTime
     * @range 0 or more
     */
    public $shipmentTime;

    /**
     * @var Routing $routing
     * @range 0 or more
     */
    public $routing;

    /**
     * @var ShipperAddressLabelData $shipper
     * @range 0 or more
     */
    public $shipper;

    /**
     * @var ReceiverAddressLabelData $receiver
     * @range 0 or more
     */
    public $receiver;

    /**
     * @var NeighbourAddress $neighbour
     * @range 0 or more
     */
    public $neighbour;

    /**
     * @var ServicePoint $servicepoint
     * @range 0 or more
     */
    public $servicepoint;

    /**
     * @var LabelDataServiceDefinition $service
     * @range 0 or more
     */
    public $service;

    /**
     * @var ArrayOfPiecedefinitionlabeldata $pieceList
     * @range 0 or more
     */
    public $pieceList;
}
