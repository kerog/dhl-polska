<?php
namespace Kerogos\DhlPolska\DTO;

class PaymentData
{
    /**
     * @var string $paymentMethod
     * @range 0 or more
     */
    public $paymentMethod;

    /**
     * @var string $payerType
     * @range 0 or more
     */
    public $payerType;

    /**
     * @var string $accountNumber
     * @range 0 or more
     */
    public $accountNumber;

    /**
     * @var string $costsCenter
     * @range 0 or more
     */
    public $costsCenter;
}
