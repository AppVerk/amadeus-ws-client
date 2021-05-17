<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

use Amadeus\Client\LoadParamsFromArray;

class Award extends LoadParamsFromArray
{
    public const LOCAL_STAR_PROVIDER = 'LSR';

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $rating;
}