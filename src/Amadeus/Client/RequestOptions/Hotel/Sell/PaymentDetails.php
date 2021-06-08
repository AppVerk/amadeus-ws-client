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

class PaymentDetails extends LoadParamsFromArray
{
    public const FORM_OF_PAYMENT_CREDIT_CARD = 1;

    public const FORM_OF_PAYMENT_TRAVEL_AGENT_IDENTIFICATION = 10;

    public const FORM_OF_PAYMENT_CORPORATE_IDENTIFICATION = 12;

    public const FORM_OF_PAYMENT_ADDRESS = 14;

    public const FORM_OF_PAYMENT_WIRE_PAYMENT = 28;

    public const FORM_OF_PAYMENT_MISCELLANEOUS_CHARGE_ORDER = 4;

    public const FORM_OF_PAYMENT_CHECK = 6;

    public const FORM_OF_PAYMENT_BUSINESS_ACCOUNT = 9;

    public const PAYMENT_TYPE_GUARANTEED = 1;

    public const PAYMENT_TYPE_DEPOSIT = 2;

    public const SERVICE_TO_PAY_HOTEL = 3;

    public int $formOfPaymentCode;
    public int $paymentType;
    public int $serviceToPay;
}
