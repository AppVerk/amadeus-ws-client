<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\DescriptiveInfo;

class HotelDescriptiveInfo extends HotelDescriptiveInfoRequestType
{
    /**
     * One or more postal service standard codes or abbreviations for the state, province, or region.
     *
     * @var string[]
     */
    public $StateCodeList = [];

    /**
     * These may be used to filter the response of requested data.
     *
     * @var string[]
     */
    public $CountryCodeList = [];

    /**
     * These may be used to filter the response of requested data.
     *
     * @var string[]
     */
    public $BrandCodeList;

    /**
     * The response returns the attribute if there was additional data.
     * The text value should be echoed in this request to indicate where to begin the next block of data.
     *
     * @var string
     */
    public $MoreDataEchoToken;

    /**
     * Date to which the response information should apply.
     *
     * @var string
     */
    public $ApplicableDate;

    public function __construct(DescriptiveInfo $info)
    {
        //@todo
    }
}