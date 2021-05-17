<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class ContactInfo extends LoadParamsFromArray
{
    /**
     * @var bool
     */
    public $sendData;

    /**
     * @var string
     */
    public $emailAddress;
}