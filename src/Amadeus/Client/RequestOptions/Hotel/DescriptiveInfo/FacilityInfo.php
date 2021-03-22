<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class FacilityInfo extends LoadParamsFromArray
{
    /**
     * @var bool
     */
    public $sendMeetingRooms;

    /**
     * @var bool
     */
    public $sendGuestRooms;

    /**
     * @var bool
     */
    public $sendRestaurants;
}