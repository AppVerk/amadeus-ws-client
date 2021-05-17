<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

class Policies extends LoadParamsFromArray
{
    /**
     * @var bool
     */
    public $guaranteeRoomTypeViaGDS;

    /**
     * @var bool
     */
    public $guaranteeRoomTypeViaCRC;

    /**
     * @var bool
     */
    public $guaranteeRoomTypeViaProperty;

    /**
     * @var bool
     */
    public $sendPolicies;
}