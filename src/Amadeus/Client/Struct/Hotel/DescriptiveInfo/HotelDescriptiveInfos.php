<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

class HotelDescriptiveInfos
{
    /**
     * @var HotelDescriptiveInfo[]
     */
    public $HotelDescriptiveInfo;

    /**
     * The requested language in which the hotel property information should be sent.
     *
     * @var string
     */
    public $LangRequested;
}