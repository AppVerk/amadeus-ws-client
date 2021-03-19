<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;
use Amadeus\Client\Struct\Hotel\DescriptiveInfo\HotelDescriptiveInfo;
use Amadeus\Client\Struct\Hotel\DescriptiveInfo\HotelDescriptiveInfos;

class DescriptiveInfo extends BaseWsMessage
{
    /**
     * @var string
     */
    public $EchoToken;

    /**
     * @var string
     */
    public $Version;

    /**
     * @var string
     */
    public $PrimaryLangID;

    /**
     * @var HotelDescriptiveInfos
     */
    public $HotelDescriptiveInfos;

    public function __construct(HotelDescriptiveInfoOptions $options)
    {
        $this->EchoToken = $options->echoToken;
        $this->Version = $options->version;
        $this->PrimaryLangID = $options->languageCode;

        if (!empty($options->descriptiveInfos)) {
            $this->HotelDescriptiveInfos = new HotelDescriptiveInfos();

            foreach ($options->descriptiveInfos as $info) {
                $this->HotelDescriptiveInfos->HotelDescriptiveInfo[] = new HotelDescriptiveInfo($info);
            }
        }
    }
}