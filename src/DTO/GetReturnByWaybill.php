<?php
namespace Kerogos\DhlPolska\DTO;

class GetReturnByWaybill extends BaseDTO
{
    /**
     * @var AuthData $authData
     */
    public $authData;

    /**
     * @var ArrayOfReturnitemtoprint $itemsToPrint
     */
    public $itemsToPrint;
}
