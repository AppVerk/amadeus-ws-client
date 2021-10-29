<?php
declare(strict_types = 1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\ContactInfo as RequestContactInfo;

class ContactInfo
{
    /**
     * @var bool
     */
    public $SendData;

    /**
     * @var string
     */
    public $EmailAddress;

    public function __construct(RequestContactInfo $info)
    {
        $this->SendData = $info->sendData;
        $this->EmailAddress = $info->emailAddress;
    }
}