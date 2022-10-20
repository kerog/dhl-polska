<?php
namespace Kerogos\DhlPolska\DTO;

class GetTrackAndTraceInfo extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var string|null $shipmentId
     */
    public $shipmentId;
}
