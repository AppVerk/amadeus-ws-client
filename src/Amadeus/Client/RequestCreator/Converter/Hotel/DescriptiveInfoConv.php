<?php

namespace Amadeus\Client\RequestCreator\Converter\Hotel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;
use Amadeus\Client\Struct;

class DescriptiveInfoConv extends BaseConverter
{
    public function convert($requestOptions, $version)
    {
        return new Struct\Hotel\DescriptiveInfo($requestOptions);
    }
}