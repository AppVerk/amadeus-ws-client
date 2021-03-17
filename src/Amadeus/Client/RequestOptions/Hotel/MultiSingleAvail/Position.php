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

class Position
{
    public const MILES_MEASURE = 1;
    public const KILOMETERS_MEASURE = 2;
    public const METERS_MEASURE = 3;

    public const EXACT_ACCURACY = 1;
    public const BLOCK_ACCURACY = 2;
    public const STREET_ACCURACY = 3;

    /**
     * The measure of the angular distance on a meridian north or south of the equator.
     *
     * @var float
     */
    public $latitude;

    /**
     * The measure of the angular distance on a meridian east or west of the prime meridian.
     *
     * @var float
     */
    public $longitude;

    /**
     * Refer to OpenTravel Code List Position Accuracy Code (PAC).
     *
     * @var int
     */
    public $accuracy;

    /**
     * @var int
     */
    public $distance;

    /**
     * Code List Unit of Measure Code (UOM).
     *
     * @var int
     */
    public $distanceMeasure;
}
