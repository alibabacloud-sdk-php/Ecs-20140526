<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecommendInstanceTypeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $priorityStrategy;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var string
     */
    public $zoneMatchMode;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string[]
     */
    public $instanceTypeFamily;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'cores'                => 'Cores',
        'memory'               => 'Memory',
        'instanceFamilyLevel'  => 'InstanceFamilyLevel',
        'instanceType'         => 'InstanceType',
        'networkType'          => 'NetworkType',
        'instanceChargeType'   => 'InstanceChargeType',
        'spotStrategy'         => 'SpotStrategy',
        'ioOptimized'          => 'IoOptimized',
        'priorityStrategy'     => 'PriorityStrategy',
        'maxPrice'             => 'MaxPrice',
        'regionId'             => 'RegionId',
        'zoneId'               => 'ZoneId',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'zoneMatchMode'        => 'ZoneMatchMode',
        'scene'                => 'Scene',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->zoneMatchMode) {
            $res['ZoneMatchMode'] = $this->zoneMatchMode;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecommendInstanceTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['ZoneMatchMode'])) {
            $model->zoneMatchMode = $map['ZoneMatchMode'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            if (!empty($map['InstanceTypeFamily'])) {
                $model->instanceTypeFamily = $map['InstanceTypeFamily'];
            }
        }

        return $model;
    }
}
