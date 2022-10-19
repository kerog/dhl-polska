<?php
namespace Kerogos\DhlPolska\DTO;

class GetNearestServicepointsRequest
{
    /**
     * @var string $country
     */
    public $country;

    /**
     * @var string $postcode
     */
    public $postcode;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var int $radius
     */
    public $radius;
}
