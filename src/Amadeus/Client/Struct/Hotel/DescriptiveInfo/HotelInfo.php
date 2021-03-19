<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

class HotelInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendData;

    /**
     * This is a description of the operating status of the Hotel.
     * This information may support the code in HotelStatusCode.
     *
     * @var string
     */
    public $HotelStatus;

    /**
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in
     * the response. Refer to OTA Code List HotelStatusCode.
     *
     * @var string
     */
    public $HotelStatusCode;
}