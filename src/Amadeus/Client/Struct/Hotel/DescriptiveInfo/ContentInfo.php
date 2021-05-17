<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\ContentInfo as RequestContentInfo;

class ContentInfo
{
    /**
     * @var string
     */
    public $Code;

    /**
     * @var string
     */
    public $Name;

    public function __construct(RequestContentInfo $info)
    {
        $this->Code = $info->code;
        $this->Name = $info->name;
    }
}