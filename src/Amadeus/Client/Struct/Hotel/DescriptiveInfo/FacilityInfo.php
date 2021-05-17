<?php
declare(strict_types = 1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\FacilityInfo as RequestFacilityInfo;

class FacilityInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendMeetingRooms;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendGuestRooms;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendRestaurants;

    public function __construct(RequestFacilityInfo $info)
    {
        $this->SendGuestRooms = $info->sendGuestRooms;
        $this->SendMeetingRooms = $info->sendMeetingRooms;
        $this->SendRestaurants = $info->sendRestaurants;
    }
}