<?php
namespace Kerogos\DhlPolska\DTO;

class Piece
{
    /**
     * @var string $packageNumber
     */
    public $packageNumber;

    /**
     * @var string $productType
     */
    public $productType;

    /**
     * @var float $weightReal
     */
    public $weightReal;

    /**
     * @var float $weighVolumetric
     */
    public $weighVolumetric;

    /**
     * @var int $width
     */
    public $width;

    /**
     * @var int $length
     */
    public $length;

    /**
     * @var int $height
     */
    public $height;
}
