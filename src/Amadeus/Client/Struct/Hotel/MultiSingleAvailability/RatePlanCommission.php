<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class RatePlanCommission
{
    /**
     * Defines the maximum commission percentage requested.
     *
     * @var float
     */
    public $MaxCommissionPercentage;

    /**
     * Defines the minimum commission percentage requested.
     *
     * @var float
     */
    public $MinCommissionPercentage;

    /**
     * When true, indicates the rate requested is commissionable.
     *
     * @var bool
     */
    public $CommissionableIndicator;
}