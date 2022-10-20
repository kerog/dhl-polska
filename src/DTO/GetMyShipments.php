<?php
namespace Kerogos\DhlPolska\DTO;

use PHPUnit\Runner\BaseTestRunner;

class GetMyShipments extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var string|null $createdFrom
     */
    public $createdFrom;

    /**
     * @var string|null $createdTo
     */
    public $createdTo;

    /**
     * @var int|null $offset
     */
    public $offset;
}
