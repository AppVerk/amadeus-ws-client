<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\DescriptiveInfo;

class HotelDescriptiveInfoOptions extends Base
{
    public const FULL_INFORMATION_TOKEN = 'WithParsing';
    public const SHORT_INFORMATION_TOKEN = 'PartialwithParsing';

    /**
     * @var string
     */
    public $echoToken = self::SHORT_INFORMATION_TOKEN;

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
     * @var DescriptiveInfo[]
     */
    public $descriptiveInfos = [];
}