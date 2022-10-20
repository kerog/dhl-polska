<?php
namespace Kerogos\DhlPolska\DTO;

class AuthData
{
    /**
     * @var string $username
     */
    public $username;

    /**
     * @var string $password
     */
    public $password;

    public function __construct()
    {
        $this->username = config('dhl.apiLogin');
        $this->password = config('dhl.apiPassword');
    }
}
