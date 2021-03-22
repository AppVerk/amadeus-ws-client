<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

class AreaInfo
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendRefPoints;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendAttractions;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendRecreations;
}