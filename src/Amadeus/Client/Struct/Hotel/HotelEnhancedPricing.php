<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\HotelEnhancedPricingOptions;
use Amadeus\Client\Struct\Hotel\MultiSingleAvailability\AvailRequestSegment;
use Amadeus\Client\Struct\Hotel\MultiSingleAvailability\AvailRequestSegments;

class HotelEnhancedPricing extends BaseWsMessage
{
    /**
     * @var string
     */
    public $EchoToken = 'Pricing';

    /**
     * @var bool
     */
    public $SummaryOnly = false;

    /**
     * @var bool
     */
    public $RateRangeOnly = false;

    /**
     * @var string
     */
    public $PrimaryLangID;

    /**
     * @var AvailRequestSegment[]
     */
    public $AvailRequestSegments = [];

    public function __construct(HotelEnhancedPricingOptions $options)
    {
        $this->EchoToken = $options->echoToken;
        $this->PrimaryLangID = $options->primaryLangID;
        $this->Version = $options->version;

        $this->AvailRequestSegments = new AvailRequestSegments();

        foreach ($options->segments as $segment) {
            $this->AvailRequestSegments->AvailRequestSegment[] = new AvailRequestSegment($segment);
        }
    }
}