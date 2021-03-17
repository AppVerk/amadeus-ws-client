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

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

/**
 * Transportation
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Transportation
{
    /**
     * Descriptive text that describes the transportation.
     *
     * @var string
     */
    public $DescriptiveText;

    /**
     * This would be used for information such as a shuttle needs to be requested or a reservation is required.
     *
     * @var string
     */
    public $NotificationRequired;

    /**
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code (TRP).
     *
     * @var string
     */
    public $TransportationCode;

    /**
     * Refer to OpenTravel Codelist Charge Type (CHG).
     *
     * @var string
     */
    public $ChargeUnit;

    /**
     * When true there is no additional charge for transportation.
     *
     * @var bool
     */
    public $Included;

    /**
     * Descriptive information about the mode of transportation.
     *
     * @var string
     */
    public $Description;

    /**
     * The normal (average) travel time required to get to or from the location, measured in minutes.
     *
     * @var string
     */
    public $TypicalTravelTime;

    /**
     * This attribute is used to explicitly define whether the type of transportation applies.
     * Refer to OpenTravel Code list Option Type Code (OTC). This is used in conjunction with TransportationCode.
     *
     * @var string
     */
    public $ExistsCode;

    /**
     * Used to define the mode of available transportation. Refer to OpenTravel Code List Transportation Code (TRP).
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string
     */
    public $Code;

    /**
     * May be used to give further detail on the code.
     *
     * @var string
     */
    public $CodeDetail;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     * @var bool
     */
    public $Removal;

    /**
     * A monetary amount.
     *
     * @var float
     */
    public $Amount;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.\
     *
     * @var string
     */
    public $CurrencyCode;

    /**
     * Indicates the number of decimal places for a particular currency.
     * This is equivalent to the ISO 4217 standard "minor unit".
     * Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g.,
     * USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int
     */
    public $DecimalPlaces;

    /**
     * A unique identifying value assigned by the creating system.
     * The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string
     */
    public $ID;
}
