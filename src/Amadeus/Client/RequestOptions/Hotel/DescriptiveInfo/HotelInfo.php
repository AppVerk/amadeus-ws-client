<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

class HotelInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendData;

    /**
     * This is a description of the operating status of the Hotel.
     * This information may support the code in HotelStatusCode.
     *
     * @var string
     */
    public $hotelStatus;

    /**
     * This indicates the operating status (e.g. Open, Closed, Deflagged, Pre-opening) of the hotels to be returned in
     * the response. Refer to OTA Code List HotelStatusCode.
     *
     * @var string
     */
    public $hotelStatusCode;
}