<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

use Amadeus\Client\LoadParamsFromArray;

class MealPlan extends LoadParamsFromArray
{
    public const ALL_INCLUSIVE = 1;
    public const AMERICAN = 2;
    public const BED_AND_BREAKFAST = 3;
    public const BUFFET_BREAKFAST = 4;
    public const CARIBBEAN_BREAKFAST = 5;
    public const CONTINENTAL_BREAKFAST = 6;
    public const ENGLISH_BREAKFAST = 7;
    public const EUROPEAN_PLAN = 8;
    public const FAMILY_PLAN = 9;
    public const FULL_BOARD = 10;
    public const FULL_BREAKFAST = 11;
    public const HALF_BOARD_MODIFIED_AMERICAN_PLAN = 12;
    public const AS_BROCHURED = 13;
    public const ROOM_ONLY = 14;
    public const SELF_CATERING = 15;
    public const BERMUDA = 16;
    public const DINNER_BED_AND_BREAKFAST_PLAN = 17;
    public const FAMILY_AMERICAN = 18;
    public const BREAKFAST = 19;
    public const MODIFIED = 20;
    public const LUNCH = 21;
    public const DINNER = 22;
    public const BREAKFAST_AND_LUNCH = 23;

    /**
     * @var string[]
     */
    public $code = [];
}