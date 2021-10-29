<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class ContentInfo extends LoadParamsFromArray
{
    public const EXTERIOR_VIEW_CODE = 1;
    public const BAR_LOUNGE_CODE = 13;
    public const SUITE_CODE = 7;
    public const GUEST_ROOM_CODE = 6;
    public const POOL_VIEW_CODE = 3;
    public const RESTAURANT_CODE = 4;
    public const SPA_CODE = 12;
    public const HEALTH_CLUB_CODE = 5;
    public const GOLF_COURSE_CODE = 10;
    public const MEETING_ROOM_CODE = 8;
    public const LOBBY_VIEW_CODE = 2;
    public const BALLROOM_CODE = 9;
    public const BEACH_CODE = 11;
    public const RECREATIONAL_FACILITY_CODE = 14;
    public const BUSINESS_CENTER_CODE = 23;
    public const HOT_NEWS_CODE = 19;
    public const PROMOTIONAL_CODE = 18;
    public const MAP_CODE = 17;
    public const BASICS_CODE = 16;
    public const MISCELLANEOUS_CODE = 20;
    public const GUEST_ROOM_AMENITY_CODE = 21;
    public const PROPERTY_AMENITY_CODE = 22;
    public const LOGO_CODE = 15;

    /**
     * self:*_CODE
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;
}