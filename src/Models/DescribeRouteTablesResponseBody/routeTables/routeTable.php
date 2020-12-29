<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys;
use AlibabaCloud\Tea\Model;

class routeTable extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var routeEntrys
     */
    public $routeEntrys;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routeTableType;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'VRouterId'       => 'VRouterId',
        'routeEntrys'     => 'RouteEntrys',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTableType'  => 'RouteTableType',
        'routeTableId'    => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->routeEntrys) {
            $res['RouteEntrys'] = null !== $this->routeEntrys ? $this->routeEntrys->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['RouteEntrys'])) {
            $model->routeEntrys = routeEntrys::fromMap($map['RouteEntrys']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
