<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class ArrivalPolicy
{
    /**
     * When true, return rates with a guarantee policy.
     *
     * @var bool
     */
    public $GuaranteePolicyIndicator;

    /**
     * When true, return rates with a deposit policy.
     *
     * @var bool
     */
    public $DepositPolicyIndicator;

    /**
     * When true, return rates with a hold time policy.
     *
     * @var bool
     */
    public $HoldTimePolicyIndicator;
}