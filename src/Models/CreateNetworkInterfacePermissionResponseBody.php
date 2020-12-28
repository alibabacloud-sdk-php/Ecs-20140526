<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfacePermissionResponseBody\networkInterfacePermission;
use AlibabaCloud\Tea\Model;

class CreateNetworkInterfacePermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var networkInterfacePermission
     */
    public $networkInterfacePermission;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'networkInterfacePermission' => 'NetworkInterfacePermission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->networkInterfacePermission) {
            $res['NetworkInterfacePermission'] = null !== $this->networkInterfacePermission ? $this->networkInterfacePermission->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkInterfacePermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NetworkInterfacePermission'])) {
            $model->networkInterfacePermission = networkInterfacePermission::fromMap($map['NetworkInterfacePermission']);
        }

        return $model;
    }
}
