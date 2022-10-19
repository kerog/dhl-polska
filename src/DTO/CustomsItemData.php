<?php
namespace Kerogos\DhlPolska\DTO;

class CustomsItemData
{
    /**
     * @var string $nameEn
     * @range 0 or more
     */
    public $nameEn;

    /**
     * @var string $namePl
     * @range 0 or more
     */
    public $namePl;

    /**
     * @var string $quantity
     * @range 0 or more
     */
    public $quantity;

    /**
     * @var string $weight
     * @range 0 or more
     */
    public $weight;

    /**
     * @var string $value
     * @range 0 or more
     */
    public $value;

    /**
     * @var string $tariffCode
     * @range 0 or more
     */
    public $tariffCode;
}
