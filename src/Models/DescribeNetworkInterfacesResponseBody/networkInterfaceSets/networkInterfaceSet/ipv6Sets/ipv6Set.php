<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv6Sets;

use AlibabaCloud\Tea\Model;

class ipv6Set extends Model
{
    /**
     * @description The IPv6 address of the ENI.
     *
     * @example 2408:4321:180:1701:94c7:bc38:3bfa:****
     *
     * @var string
     */
    public $ipv6Address;
    protected $_name = [
        'ipv6Address' => 'Ipv6Address',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Set
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        return $model;
    }
}
