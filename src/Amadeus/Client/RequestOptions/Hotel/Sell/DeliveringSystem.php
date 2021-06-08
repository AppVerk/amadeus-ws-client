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

class DeliveringSystem extends LoadParamsFromArray
{
    public const ERETAIL = 'AERE';

    public const ETRAVEL_MANAGEMENT = 'AETM';

    public const COMMAND_PAGE = 'COMM';

    public const SELL_v2_OR_SELL_CONNECT = 'SECO';

    public const SELLING_PLATFORM_CLASSIC = 'SELL';

    public const NON_SPECIFIC_PRODUCT_FROM_SELLING_PLATFORM = 'SEP';

    public const WEBSERVICES = 'WEBS';

    /**
     * @var string
     */
    public $companyId;
}
