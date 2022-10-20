<?php

namespace Kerogos\DhlPolska\DTO;

class BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    public function __construct()
    {
        $this->authData = new AuthData();
    }
}
