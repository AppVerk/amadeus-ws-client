<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

class RatePlanCandidate
{
    /**
     * @var HotelReference[]
     */
    public $hotelReferences = [];

    /**
     * @var string[]
     */
    public $includedMealPlans = [];
}