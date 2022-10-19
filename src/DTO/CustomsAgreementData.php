<?php
namespace Kerogos\DhlPolska\DTO;

class CustomsAgreementData
{
    /**
     * @basetype boolean
     *
     * @var      bool $notExceedValue
     * @range 0 or more
     */
    public $notExceedValue;

    /**
     * @basetype boolean
     *
     * @var      bool $notProhibitedGoods
     * @range 0 or more
     */
    public $notProhibitedGoods;

    /**
     * @basetype boolean
     *
     * @var      bool $notRestrictedGoods
     * @range 0 or more
     */
    public $notRestrictedGoods;
}
