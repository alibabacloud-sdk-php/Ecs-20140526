<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseReservedInstancesOfferingRequest\tag;
use AlibabaCloud\Tea\Model;

class PurchaseReservedInstancesOfferingRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal for the reserved instance. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal term of the reserved instance. Unit: months. This parameter takes effect only when AutoRenew is set to true.
     *
     * Valid values: 12 and 36.
     *
     * Default value when PeriodUnit is set to Year: 12.
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the reserved instance. The description can be 2 to 256 characters in length and cannot start with [http:// or https://](http://https://。).
     *
     * This parameter is left empty by default.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of pay-as-you-go instances of the same instance type that the reserved instance can match. Valid values: 1 to 50.
     *
     * Default value: 1.
     *
     * @example 3
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The instance type that the reserved instance can match.
     *
     * >  The instance types that support reserved instances are subject to updates. For more information, see [Reserved instance overview](~~100370#3c1b682051vt4~~).
     *
     * This parameter is required.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The payment option of the reserved instance. Valid values:
     *
     *   No Upfront
     *   Partial Upfront
     *   All Upfront
     *
     * Default value: All Upfront.
     *
     * @example All Upfront
     *
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The validity period of the reserved instance.
     *
     * Valid values: 1 and 3.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the validity period of the reserved instance.
     *
     * Valid value: Year.
     *
     * Default value: Year.
     *
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The operating system of the image used by the instance. Valid values:
     *
     *   Windows: Windows Server operating system
     *   Linux: Linux and UNIX-like operating system
     *
     * Default value: Linux.
     *
     * @example Linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the region in which to purchase a reserved instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the reserved instance. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testReservedInstanceName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp199lyny9b3****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The scope of reserved instance N. Valid values:
     *
     *   Region: regional
     *   Zone: zonal
     *
     * Default value: Region.
     *
     * @example Zone
     *
     * @var string
     */
    public $scope;

    /**
     * @description The time when you want the reserved instance to take effect. Specify the time in the [ISO 8601 standard](https://help.aliyun.com/document_detail/25696.html) in the `yyyy-MM-ddTHHZ` format. The time must be in UTC.
     *
     * >  If you do not specify this parameter, the reserved instance takes effect starting on the hour when the reserved instance is purchased. For example, if you purchase a reserved instance at 13:45:35 on November 1, 2024, the reserved instance takes effect starting 13:00:00 on November 1, 2024.
     *
     * @example 2024-07-04T15Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The tags to add to the reserved instance. You can add up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the zone in which to purchase the reserved instance. This parameter takes effect and is required only if you set `Scope` to `Zone`. You can call the [DescribeZones](https://help.aliyun.com/document_detail/25610.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'instanceAmount' => 'InstanceAmount',
        'instanceType' => 'InstanceType',
        'offeringType' => 'OfferingType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scope' => 'Scope',
        'startTime' => 'StartTime',
        'tag' => 'Tag',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseReservedInstancesOfferingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
