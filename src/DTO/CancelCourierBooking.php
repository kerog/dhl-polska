<?php
namespace Kerogos\DhlPolska\DTO;

class CancelCourierBooking extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var ArrayOfString|null $orders
     */
    public $orders;
}
