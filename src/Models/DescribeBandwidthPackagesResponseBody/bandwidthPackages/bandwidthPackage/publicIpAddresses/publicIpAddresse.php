<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages\bandwidthPackage\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddresse extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress' => 'IpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddresse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
