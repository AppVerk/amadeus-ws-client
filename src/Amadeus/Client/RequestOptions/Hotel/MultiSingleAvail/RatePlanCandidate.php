<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

class RatePlanCandidate
{
    /**
     * @var string
     */
    public $ratePlanCode;

    /**
     * @var HotelReference[]
     */
    public $hotelReferences = [];

    /**
     * @var string[]
     */
    public $includedMealPlans = [];
}