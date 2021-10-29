<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

class MealsIncluded
{
    /**
     * @var bool
     */
    public $Breakfast;

    /**
     * @var bool
     */
    public $Lunch;

    /**
     * @var bool
     */
    public $Dinner;

    /**
     * When true, a meal plan is included in this rate plan. When false, a meal plan is not included in this rate plan.
     *
     * @var bool
     */
    public $MealPlanIndicator;

    /**
     * Used to identify the types of meals included with a rate plan. Refer to OTA Code List Meal Plan Type (MPT).
     *
     * @var string[]|null
     */
    public $MealPlanCodes;

    public function __construct(array $mealPlanCodes)
    {
        if (!empty($mealPlanCodes)) {
            $this->MealPlanCodes = $mealPlanCodes;
        }
    }
}