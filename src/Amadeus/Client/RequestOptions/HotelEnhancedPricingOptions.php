<?php
namespace Amadeus\Client\RequestOptions;

class HotelEnhancedPricingOptions extends Base
{
    public $xsi = 'http://www.w3.org/2001/XMLSchema-instance';
    public $echoToken = 'Pricing';
    public $primaryLangID = 'EN';
    public $version = '4.000';
    public $availRequestSegments;
}