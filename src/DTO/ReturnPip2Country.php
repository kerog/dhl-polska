<?php
namespace Kerogos\DhlPolska\DTO;

class ReturnPip2Country
{
    /**
     * @var string $countryName
     * @range 0 or more
     */
    public $countryName;

    /**
     * @var string $countryNameEn
     * @range 0 or more
     */
    public $countryNameEn;

    /**
     * @var string $countryCode
     * @range 0 or more
     */
    public $countryCode;

    /**
     * @var ArrayOfReturnpip2param $products
     * @range 0 or more
     */
    public $products;
}
