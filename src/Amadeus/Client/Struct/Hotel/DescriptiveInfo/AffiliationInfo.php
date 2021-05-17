<?php
declare(strict_types=1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\AffiliationInfo as RequestAffiliationInfo;

class AffiliationInfo
{
    /**
     * @var bool
     */
    public $SendDistribSystems;

    /**
     * @var bool
     */
    public $SendBrands;

    /**
     * @var bool
     */
    public $SendLoyalPrograms;

    /**
     * @var bool
     */
    public $SendAwards;

    public function __construct(RequestAffiliationInfo $info)
    {
        $this->SendDistribSystems = $info->sendDistribSystems;
        $this->SendBrands = $info->sendBrands;
        $this->SendLoyalPrograms = $info->sendLoyalPrograms;
        $this->SendAwards = $info->sendAwards;
    }
}