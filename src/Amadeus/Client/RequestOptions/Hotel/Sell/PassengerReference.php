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

/**
 * GlobalBookingInfo
 */
class PassengerReference extends LoadParamsFromArray
{
    public const BOOKING_HOLDER_NON_OCCUPANT_PAX_TATTOO = 'BHN';

    public const BOOKING_HOLDER_OCCUPANT_PAX_TATTOO = 'BHO';

    public const BOOKING_OCCUPANT_PAX_TATTOO = 'BOP';

    public const GROUP_NAME_TATTOO = 'GRN';

    public const HOLDER_PAX_TATTOO = 'P';

    public const ROOM_MAIN_PAX_TATTOO_NON_OCCUPANT = 'RMN';

    public const ROOM_MAIN_PAX_TATTOO_OCCUPANT = 'RMO';

    public const ROOM_OCCUPANT_PAX_TATTOO = 'ROP';

    public string $type;

    public int $value;

    public function __construct(string $type, int $value){
        $this->type = $type;
        $this->value = $value;
    }
}
