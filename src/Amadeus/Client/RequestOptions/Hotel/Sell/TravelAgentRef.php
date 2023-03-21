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

namespace Amadeus\Client\RequestOptions\Hotel\Sell;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Reference;

class TravelAgentRef extends LoadParamsFromArray
{
    public const TRAVEL_AGENT_PHONE = 'AP';

    public const TRAVEL_AGENT_EMAIL = 'APE';

    public const TRAVEL_AGENT_FAX = 'APF';

    public const SEGMENT_TATTOO_REFERENCE_NUMBER = 'ST';

    public string $status;

    public Reference $reference;

    public function __construct(string $status, string $referenceType, int $referenceValue){
        $this->status = $status;
        $this->reference = new Reference($referenceType, $referenceValue);
    }
}