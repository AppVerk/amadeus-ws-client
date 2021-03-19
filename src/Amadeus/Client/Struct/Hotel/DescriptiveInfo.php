<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;

class DescriptiveInfo extends BaseWsMessage
{
    public $HotelDescriptiveInfos;
    public $EchoToken;
    public $Version;
    public $PrimaryLangID;

    public function __construct(HotelDescriptiveInfoOptions $options)
    {
        $this->HotelDescriptiveInfos = $options->hotelDescriptiveInfos;
        $this->EchoToken = $options->echoToken;
        $this->Version = $options->version;
        $this->PrimaryLangID = $options->primaryLangID;
    }
}