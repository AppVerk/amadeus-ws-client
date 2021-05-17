<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

class HotelDescriptiveInfoRequestType
{
    /**
     * @var HotelInfo
     */
    public $HotelInfo;

    /**
     * @var FacilityInfo
     */
    public $FacilityInfo;

    /**
     * @var Policies
     */
    public $Policies;

    /**
     * @var AreaInfo
     */
    public $AreaInfo;

    /**
     * @var AffiliationInfo
     */
    public $AffiliationInfo;

    /**
     * @var ContactInfo
     */
    public $ContactInfo;

    /**
     * @var MultimediaObjects
     */
    public $MultimediaObjects;

    /**
     * @var ContentInfos
     */
    public $ContentInfos;

    /**
     * @var string
     */
    public $ChainCode;

    /**
     * @var string
     */
    public $BrandCode;

    /**
     * @var string
     */
    public $HotelCode;

    /**
     * @var string
     */
    public $HotelCityCode;

    /**
     * @var string
     */
    public $HotelName;

    /**
     * @var string
     */
    public $HotelCodeContext;

    /**
     * @var string
     */
    public $ChainName;

    /**
     * @var string
     */
    public $BrandName;
}