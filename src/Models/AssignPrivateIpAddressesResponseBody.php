<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;
use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesResponseBody extends Model
{
    /**
     * @var assignedPrivateIpAddressesSet
     */
    public $assignedPrivateIpAddressesSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assignedPrivateIpAddressesSet' => 'AssignedPrivateIpAddressesSet',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedPrivateIpAddressesSet) {
            $res['AssignedPrivateIpAddressesSet'] = null !== $this->assignedPrivateIpAddressesSet ? $this->assignedPrivateIpAddressesSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedPrivateIpAddressesSet'])) {
            $model->assignedPrivateIpAddressesSet = assignedPrivateIpAddressesSet::fromMap($map['AssignedPrivateIpAddressesSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}