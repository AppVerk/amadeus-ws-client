<?php
declare(strict_types = 1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\MultimediaObjects as RequestMultimediaObjects;

class MultimediaObjects
{
    /**
     * @var bool
     */
    public $SendData;

    public function __construct(RequestMultimediaObjects $info)
    {
        $this->SendData = $info->sendData;
    }
}