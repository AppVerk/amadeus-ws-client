<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class Position
{
    /**
     * The URL of a map image.
     *
     * @var string
     */
    public $MapURL;

    /**
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @var string
     */
    public $Latitude;

    /**
     * The measure of the angular distance on a meridian east or west of the prime meridian.
     *
     * @var string
     */
    public $Longitude;

    /**
     * The height of an item, typically above sea level.
     *
     * @var string
     */
    public $Altitude;

    /**
     * Provides the unit of measure for the altitude (e.g., feet, meters, miles, kilometers).
     * Code List Unit of Measure Code (UOM).
     *
     * @var string
     */
    public $AltitudeUnitOfMeasureCode;

    /**
     * Indicates the accuracy of the property’s geo-coding, since the property’s longitude and latitude may not always be exact.
     * Refer to OpenTravel Code List Position Accuracy Code (PAC).
     *
     * @var string
     */
    public $PositionAccuracy;
}
