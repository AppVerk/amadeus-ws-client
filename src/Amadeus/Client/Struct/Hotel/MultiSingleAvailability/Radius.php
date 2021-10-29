<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class Radius
{
    /**
     * An optional attribute indicating the distance to/from a reference point.
     * When used in conjunction with DistanceMax, this represents the minimum distance.
     *
     * @var string
     */
    public $Distance;

    /**
     * When the Distance attribute contains a value, (presumably a numerical value),
     * the unit of measure is a string value that indicate what units are used for the value.
     *
     * @var string
     */
    public $DistanceMeasure;

    /**
     * An optional string value used to indicate the compass point(s) direction, e.g.: S, SE (South, Southeast),
     * FROM the Reference Point TO the hotel location if the search is not a full circumference from the reference point.
     *
     * @var string
     */
    public $Direction;

    /**
     * An optional attribute indicating the maximum distance to/from a reference point.
     *
     * @var string
     */
    public $DistanceMax;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     * Used for codes in the OpenTravel Code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     *
     * @var string
     */
    public $UnitOfMeasureCode;
}
