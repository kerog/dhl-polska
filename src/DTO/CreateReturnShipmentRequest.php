<?php
namespace Kerogos\DhlPolska\DTO;

class CreateReturnShipmentRequest
{
    /**
     * @var ReturnShipmentInfo $shipmentInfo
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
     * @var string $primaryWaybillNumber
     * @range 0 or more
     */
    public $primaryWaybillNumber;

    /**
     * @var ReturnShip $ship
     * @range 0 or more
     */
    public $ship;

    /**
     * @var ArrayOfReturnpackage $pieceList
     * @range 0 or more
     */
    public $pieceList;
}
