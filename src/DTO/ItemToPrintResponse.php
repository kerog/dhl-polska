<?php
namespace Kerogos\DhlPolska\DTO;

class ItemToPrintResponse
{
    /**
     * @var string $shipmentId
     */
    public $shipmentId;

    /**
     * @var string $labelType
     */
    public $labelType;

    /**
     * @var string $labelName
     */
    public $labelName;

    /**
     * @var string $labelData
     */
    public $labelData;

    /**
     * @var string $labelMimeType
     */
    public $labelMimeType;

    /**
     * @var string $cn23Data
     */
    public $cn23Data;

    /**
     * @var string $cn23MimeType
     */
    public $cn23MimeType;

    /**
     * @var string $fvProformaData
     */
    public $fvProformaData;

    /**
     * @var string $fvProformaMimeType
     */
    public $fvProformaMimeType;

    /**
     * @var string $fvProformaNumer
     */
    public $fvProformaNumer;
}
