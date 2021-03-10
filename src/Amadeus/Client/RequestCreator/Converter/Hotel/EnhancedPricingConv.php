<?php

namespace Amadeus\Client\RequestCreator\Converter\Hotel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\HotelEnhancedPricingOptions;
use Amadeus\Client\Struct;

class EnhancedPricingConv extends BaseConverter
{
    public function convert($requestOptions, $version)
    {
        return new Struct\Hotel\HotelEnhancedPricing($requestOptions);
    }
}