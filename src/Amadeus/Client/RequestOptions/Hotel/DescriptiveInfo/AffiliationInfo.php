<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class AffiliationInfo extends LoadParamsFromArray
{
    /**
     * @var bool
     */
    public $sendDistribSystems;

    /**
     * @var bool
     */
    public $sendBrands;

    /**
     * @var bool
     */
    public $sendLoyalPrograms;

    /**
     * @var bool
     */
    public $sendAwards;
}