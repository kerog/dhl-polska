<?php
namespace Kerogos\DhlPolska\DTO;

class Package
{
    /**
     * @var string $type
     * @range 0 or more
     */
    public $type;

    /**
     * @basetype boolean
     *
     * @var      bool $euroReturn
     * @range 0 or more
     */
    public $euroReturn;

    /**
     * @var int $weight
     * @range 0 or more
     */
    public $weight;

    /**
     * @var int $width
     * @range 0 or more
     */
    public $width;

    /**
     * @var int $height
     * @range 0 or more
     */
    public $height;

    /**
     * @var int $length
     * @range 0 or more
     */
    public $length;

    /**
     * @var int $quantity
     * @range 0 or more
     */
    public $quantity;

    /**
     * @basetype boolean
     *
     * @var      bool $nonStandard
     * @range 0 or more
     */
    public $nonStandard;

    /**
     * @var string $blpPieceId
     * @range 0 or more
     */
    public $blpPieceId;
}
