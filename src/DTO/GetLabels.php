<?php
namespace Kerogos\DhlPolska\DTO;

class GetLabels extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var ArrayOfItemtoprint|null $itemsToPrint
     */
    public $itemsToPrint;
}
