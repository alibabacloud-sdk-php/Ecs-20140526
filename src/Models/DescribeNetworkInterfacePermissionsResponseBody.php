<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacePermissionsResponseBody\networkInterfacePermissions;

class DescribeNetworkInterfacePermissionsResponseBody extends Model
{
    /**
     * @var networkInterfacePermissions
     */
    public $networkInterfacePermissions;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkInterfacePermissions' => 'NetworkInterfacePermissions',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'requestId'                   => 'RequestId',
        'totalCount'                  => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->networkInterfacePermissions) {
            $this->networkInterfacePermissions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfacePermissions) {
            $res['NetworkInterfacePermissions'] = null !== $this->networkInterfacePermissions ? $this->networkInterfacePermissions->toArray($noStream) : $this->networkInterfacePermissions;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfacePermissions'])) {
            $model->networkInterfacePermissions = networkInterfacePermissions::fromMap($map['NetworkInterfacePermissions']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
