<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class DescriptiveInfo extends LoadParamsFromArray
{
    /**
     * @var string[]
     */
    public $stateCodeList = [];

    /**
     * @var string[]
     */
    public $countryCodeList = [];

    /**
     * @var string[]
     */
    public $brandCodeList;

    /**
     * @var string
     */
    public $moreDataEchoToken;

    /**
     * @var string
     */
    public $applicableDate;

    /**
     * @var HotelInfo
     */
    public $hotelInfo;

    /**
     * @var FacilityInfo
     */
    public $facilityInfo;

    /**
     * @var Policies
     */
    public $policies;

    /**
     * @var AreaInfo
     */
    public $areaInfo;

    /**
     * @var AffiliationInfo
     */
    public $affiliationInfo;

    /**
     * @var ContactInfo
     */
    public $contactInfo;

    /**
     * @var MultimediaObjects
     */
    public $multimediaObjects;

    /**
     * @var ContentInfo[]
     */
    public $contentInfo = [];

    /**
     * @var string
     */
    public $chainCode;

    /**
     * @var string
     */
    public $brandCode;

    /**
     * @var string
     */
    public $hotelCode;

    /**
     * @var string
     */
    public $hotelCityCode;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $hotelCodeContext;

    /**
     * @var string
     */
    public $chainName;

    /**
     * @var string
     */
    public $brandName;
}