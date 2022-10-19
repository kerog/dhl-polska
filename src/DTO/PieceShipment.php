<?php
namespace Kerogos\DhlPolska\DTO;

class PieceShipment
{
    /**
     * @var string $shipmentNumber
     * @range 0 or more
     */
    public $shipmentNumber;

    /**
     * @var string $cedexNumber
     * @range 0 or more
     */
    public $cedexNumber;

    /**
     * @var ArrayOfPiece $packages
     * @range 0 or more
     */
    public $packages;
}
