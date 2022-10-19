<?php
namespace Kerogos\DhlPolska\DTO;

class PieceDefinitionLabelData
{
    /**
     * @var string $routingBarcode
     */
    public $routingBarcode;

    /**
     * @var string $type
     */
    public $type;

    /**
     * @var int $width
     */
    public $width;

    /**
     * @var int $height
     */
    public $height;

    /**
     * @var int $length
     */
    public $length;

    /**
     * @var float $weight
     */
    public $weight;

    /**
     * @var int $quantity
     */
    public $quantity;

    /**
     * @basetype boolean
     *
     * @var      bool $nonStandard
     */
    public $nonStandard;

    /**
     * @var string $blpPieceId
     */
    public $blpPieceId;

    /**
     * @basetype boolean
     *
     * @var      bool $euroReturn
     */
    public $euroReturn;
}
