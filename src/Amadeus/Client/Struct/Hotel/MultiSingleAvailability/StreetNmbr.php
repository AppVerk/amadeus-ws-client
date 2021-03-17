<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\Struct\WsMessageUtility;

class StreetNmbr extends StreetNmbrType
{
    /**
     * Usually a letter right after the street number (A in 66-A, B in 123-B etc).
     *
     * @var string
     */
    public $StreetNmbrSuffix;

    /**
     * Street direction of an address (e.g., N, E, S, NW, SW).
     *
     * @var string
     */
    public $StreetDirection;

    /**
     * Numerical equivalent of a rural township as defined within a given area (e.g., 12, 99).
     *
     * @var string
     */
    public $RuralRouteNmbr;

    /**
     * Defines a Post Office Box number.
     *
     * @var string
     */
    public $POBox;
}
