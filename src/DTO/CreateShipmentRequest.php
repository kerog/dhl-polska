<?php
namespace Kerogos\DhlPolska\DTO;

class CreateShipmentRequest
{
    /**
     * @var ShipmentInfo $shipmentInfo
     * @range 0 or more
     */
    public $shipmentInfo;

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
     * @var Ship $ship
     * @range 0 or more
     */
    public $ship;

    /**
     * @var ArrayOfPackage $pieceList
     * @range 0 or more
     */
    public $pieceList;

    /**
     * @var CustomsData $customs
     * @range 0 or more
     */
    public $customs;
}
