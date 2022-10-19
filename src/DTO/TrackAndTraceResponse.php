<?php
namespace Kerogos\DhlPolska\DTO;

class TrackAndTraceResponse
{
    /**
     * @var string $shipmentId
     * @range 0 or more
     */
    public $shipmentId;

    /**
     * @var string $receivedBy
     * @range 0 or more
     */
    public $receivedBy;

    /**
     * @var ArrayOfTrackandtraceevent $events
     * @range 0 or more
     */
    public $events;
}
