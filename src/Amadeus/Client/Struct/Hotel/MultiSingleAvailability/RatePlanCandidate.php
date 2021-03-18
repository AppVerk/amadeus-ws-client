<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\RatePlanCandidate as RequestRatePlanCandidate;

class RatePlanCandidate
{
    /**
     * @var HotelRefs
     */
    public $HotelRefs;

    /**
     * @var MealsIncluded
     */
    public $MealsIncluded;

    /**
     * @var ArrivalPolicy
     */
    public $ArrivalPolicy;

    /**
     * @var RatePlanCommission
     */
    public $RatePlanCommission;

    /**
     * A unique identifier for this rate plan candidate.
     *
     * @var string
     */
    public $RPH;

    /**
     * @var string
     */
    public $PrepaidQualifier;

    /**
     * If TRUE, the response should include ONLY those rates that are available in the date range specified.
     * If FALSE, all rates are to be returned.
     *
     * @var bool
     */
    public $AvailRatesOnlyInd;

    public function __construct(RequestRatePlanCandidate $ratePlanCandidate)
    {
        foreach ($ratePlanCandidate->hotelReferences as $hotelReference) {
            $this->HotelRefs->HotelRef[] = new HotelRef($hotelReference);
        }

        $this->MealsIncluded = new MealsIncluded($ratePlanCandidate->includedMealPlans);
    }
}