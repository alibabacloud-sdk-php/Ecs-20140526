<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeRouteTablesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'regionId'       => 'RegionId',
        'VRouterId'      => 'VRouterId',
        'routeTableId'   => 'RouteTableId',
        'routerType'     => 'RouterType',
        'routerId'       => 'RouterId',
        'routeTableName' => 'RouteTableName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
