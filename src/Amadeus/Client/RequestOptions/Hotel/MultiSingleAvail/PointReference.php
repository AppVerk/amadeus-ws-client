<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

use Amadeus\Client\LoadParamsFromArray;

/**
 * PointReference
 *
 * @package Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class PointReference extends LoadParamsFromArray
{
    public const CROSS_STREET_TYPE = 1;
    public const INTERSECTION_TYPE = 2;
    public const HIGHWAY_TYPE = 3;
    public const HIGHWAY_EXIT_TYPE = 4;
    public const CITY_TYPE = 5;
    public const AIRPORT_TYPE = 6;
    public const RAIL_STATION_TYPE = 7;
    public const SUBWAY_STATION_TYPE = 8;
    public const GEO_LOCATION_TYPE = 9;
    public const BUS_COACH_STATION_TYPE = 10;
    public const HOTEL_TYPE = 11;
    public const NEAREST_MAJOR_CITY_TYPE = 12;
    public const SURROUNDING_CITY_TYPE = 13;
    public const HELIPORT_TYPE = 14;
    public const REGIONAL_EXPRESS_TRAIN_STATION_TYPE = 15;
    public const ATTRACTION_TYPE = 16;
    public const BUSINESS_LOCATION_TYPE = 17;
    public const CAR_RENTAL_LOCATION_TYPE = 18;
    public const CONVENTION_CENTER_TYPE = 19;
    public const EDUCATIONAL_TYPE = 20;
    public const EVENT_TYPE = 21;
    public const GROUND_TRANSPORT_TYPE = 22;
    public const MILITARY_BASES_TYPE = 23;
    public const PARK_RECREATIONAL_AREA_TYPE = 24;
    public const PORT_TYPE = 25;
    public const RESORT_SKI_AREA_TYPE = 26;
    public const SHOPPING_CENTER_TYPE = 27;
    public const SPORTS_TYPE = 28;
    public const TRANSPORTATION_POINTS_TYPE = 29;
    public const NEIGHBOURING_STATE_TYPE = 30;
    public const METRO_AREA_TYPE = 31;
    public const DISTRICT_TYPE = 32;
    public const LOCAL_LANDMARK_TYPE = 33;

    /**
     * @var string
     */
    public $stateProv;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var int
     */
    public $refPointType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeContext;

    /**
     * @var int
     */
    public $quantity;
}
