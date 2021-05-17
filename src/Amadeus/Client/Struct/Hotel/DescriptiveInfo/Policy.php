<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

class Policy
{
    /**
     * The checkin time required by this hotel for a room stay.
     *
     * @var string
     */
    public $CheckInTime;

    /**
     * The checkout time required by this hotel for a room stay.
     *
     * @var string
     */
    public $CheckOutTime;

    /**
     * Defines the default minimum number of days in advance that a booking must be made at this hotel.
     *
     * @var int
     */
    public $DefaultValidBookingMinOffset;

    /**
     * The code identifying this policy.
     *
     * @var string
     */
    public $Code;

    /**
     * The date and time when the policy information for this hotel was last updated.
     *
     * @var string
     */
    public $LastUpdated;
}