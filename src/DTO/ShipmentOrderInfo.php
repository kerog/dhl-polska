<?php
namespace Kerogos\DhlPolska\DTO;

class ShipmentOrderInfo
{
    /**
     * @var AddressData $shipper
     */
    public $shipper;

    /**
     * @var int $numberOfExPieces
     */
    public $numberOfExPieces;

    /**
     * @var int $numberOfDrPieces
     */
    public $numberOfDrPieces;

    /**
     * @var int $totalWeight
     */
    public $totalWeight;

    /**
     * @var int $heaviestPieceWeight
     */
    public $heaviestPieceWeight;
}
