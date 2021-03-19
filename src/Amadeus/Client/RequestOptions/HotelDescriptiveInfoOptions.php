<?php

namespace Amadeus\Client\RequestOptions;

class HotelDescriptiveInfoOptions extends Base
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

    public $hotelDescriptiveInfos;
}