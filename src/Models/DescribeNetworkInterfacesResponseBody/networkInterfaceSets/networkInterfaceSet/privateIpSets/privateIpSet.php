<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets\privateIpSet\associatedPublicIp;
use AlibabaCloud\Tea\Model;

class privateIpSet extends Model
{
    /**
     * @description The elastic IP address (EIP) that is associated with the private IP address.
     *
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @description Indicates whether the private IP address is the primary private IP address. Valid values:
     *
     *   true: The IP address is the primary private IP address.
     *   false: The IP address is a secondary private IP address.
     *
     * @example true
     *
     * @var bool
     */
    public $primary;

    /**
     * @description The private domain name of the ECS instance.
     *
     * >  A private domain name can be returned in a specific format only when `HostnameType` is set to `IP` or `InstanceId`.
     *
     * @example DnsTestName
     *
     * @var string
     */
    public $privateDnsName;

    /**
     * @description The private IP address of the ENI.
     *
     * @example ``172.17.**.**``
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'associatedPublicIp' => 'AssociatedPublicIp',
        'primary' => 'Primary',
        'privateDnsName' => 'PrivateDnsName',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->privateDnsName) {
            $res['PrivateDnsName'] = $this->privateDnsName;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['PrivateDnsName'])) {
            $model->privateDnsName = $map['PrivateDnsName'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
