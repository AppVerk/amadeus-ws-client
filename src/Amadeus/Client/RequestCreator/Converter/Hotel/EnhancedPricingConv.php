<?php

namespace Amadeus\Client\RequestCreator\Converter\Hotel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\HotelEnhancedPricingOptions;
use Amadeus\Client\Struct;

class EnhancedPricingConv extends BaseConverter
{
    /**
     * @param HotelEnhancedPricingOptions $requestOptions
     * @param int|string $version
     * @return Struct\Hotel\EnhancedPricing
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Hotel\EnhancedPricing($requestOptions);
    }
}