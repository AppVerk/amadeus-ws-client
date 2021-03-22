<?php
declare(strict_types=1);

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

class Policies extends PoliciesType
{
    /**
     * If true, indicates that room types can be guaranteed on reservations booked through GDS channels.
     *
     * @var bool
     */
    public $guaranteeRoomTypeViaGDS;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by central reservation centers.
     *
     * @var bool
     */
    public $guaranteeRoomTypeViaCRC;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by the property.
     *
     * @var bool
     */
    public $guaranteeRoomTypeViaProperty;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool
     */
    public $sendPolicies;
}