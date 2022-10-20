<?php
namespace Kerogos\DhlPolska\DTO;

class PnpRequest extends BaseDTO
{
    /**
     * @var AuthData $authData
     */
    public $authData;

    /**
     * @var string $date
     */
    public $date;

    /**
     * @var string $type
     */
    public $type;
}
