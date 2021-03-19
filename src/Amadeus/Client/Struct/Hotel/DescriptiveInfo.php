<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;

class DescriptiveInfo extends BaseWsMessage
{
    /**
     * @var string
     */
    public $EchoToken = 'WithParsing';

    /**
     * @var string
     */
    public $Version;

    /**
     * @var string
     */
    public $PrimaryLangID;

    public $HotelDescriptiveInfos;

    public function __construct(HotelDescriptiveInfoOptions $options)
    {
        $this->Version = $options->version;
        $this->PrimaryLangID = $options->languageCode;
        $this->HotelDescriptiveInfos = $options->hotelDescriptiveInfos;
    }
}