<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class AreaInfo extends LoadParamsFromArray
{
    /**
     * @var bool
     */
    public $sendRefPoints;

    /**
     * @var bool
     */
    public $sendAttractions;

    /**
     * @var bool
     */
    public $sendRecreations;
}