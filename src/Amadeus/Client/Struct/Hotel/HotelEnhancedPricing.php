<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\HotelEnhancedPricingOptions;

class HotelEnhancedPricing extends BaseWsMessage
{
    public $xsi;
    public $EchoToken;
    public $PrimaryLangID;
    public $Version;
    public $AvailRequestSegments;

    public function __construct(HotelEnhancedPricingOptions $options)
    {
        $this->EchoToken = $options->echoToken;
        $this->PrimaryLangID = $options->primaryLangID;
        $this->Version = $options->version;
        $this->AvailRequestSegments = $options->availRequestSegments;
    }
}