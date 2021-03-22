<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

class FacilityInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendMeetingRooms;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendGuestRooms;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendRestaurants;
}