<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class ContentInfo extends LoadParamsFromArray
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;
}