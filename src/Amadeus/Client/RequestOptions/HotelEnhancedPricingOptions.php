<?php
namespace Amadeus\Client\RequestOptions;

class HotelEnhancedPricingOptions extends Base
{
    /**
     * @var string
     */
    public $version = '4.000';

    /**
     * 2-character language code
     *
     * @var string
     */
    public $languageCode;

    /**
     * Hotel segments availability requested
     *
     * @var Hotel\MultiSingleAvail\Segment[]
     */
    public $segments = [];
}