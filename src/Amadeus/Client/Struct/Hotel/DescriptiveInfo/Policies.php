<?php
declare(strict_types = 1);

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use \Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\Policies as RequestPolicies;

class Policies extends PoliciesType
{
    /**
     * If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     *
     * @var bool
     */
    public $GuaranteeRoomTypeViaGDS;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     *
     * @var bool
     */
    public $GuaranteeRoomTypeViaCRC;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by the property.
     *
     * @var bool
     */
    public $GuaranteeRoomTypeViaProperty;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $SendPolicies;

    public function __construct(RequestPolicies $info)
    {
        $this->GuaranteeRoomTypeViaCRC = $info->guaranteeRoomTypeViaCRC;
        $this->GuaranteeRoomTypeViaGDS = $info->guaranteeRoomTypeViaGDS;
        $this->GuaranteeRoomTypeViaProperty = $info->guaranteeRoomTypeViaProperty;
        $this->SendPolicies = $info->sendPolicies;

    }
}