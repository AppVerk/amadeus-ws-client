<?php
declare(strict_types = 1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\AreaInfo as RequestAreaInfo;

class AreaInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendRefPoints;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendAttractions;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendRecreations;

    public function __construct(RequestAreaInfo $info)
    {
        $this->SendRefPoints = $info->sendRefPoints;
        $this->SendAttractions = $info->sendAttractions;
        $this->SendRecreations = $info->sendRecreations;
    }
}