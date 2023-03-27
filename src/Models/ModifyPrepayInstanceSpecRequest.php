<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ModifyPrepayInstanceSpecRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Specifies whether to enable automatic payment when you upgrade the instance type. Valid values:
     *
     *   true: enables automatic payment.
     *
     **
     *
     **Note** Make sure that your Alibaba Cloud account has sufficient balance. Otherwise, your order becomes invalid and is canceled. If your account balance is insufficient, you can set the `AutoPay` parameter to `false` to generate an unpaid order. Then, you can log on to the ECS console to pay for the order.
     *
     *   false: An order is generated but no payment is made.
     *
     * If you set the `OperatorType` parameter to `downgrade`, the `AutoPay` parameter is ignored.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The end time of the temporary change. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-01-01T12:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new instance type. For information about supported instance types, see [Overview of instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation.
     *
     * @example ecs.g5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether to support cross-cluster instance type upgrades.
     *
     * Instances of the classic network type:
     *
     *   For [retired instance types](~~55263~~), the private IP address, disk device names, and software license codes of a non-I/O optimized instance change when you upgrade the instance to an I/O optimized instance. For Linux instances, basic disks (cloud) are identified by the prefix xvd. Ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified by the prefix vd.
     *   For [instance families that can be purchased](~~25378~~), the private IP address of the instance changes when you change the instance type of the instance.
     *
     * Instances of the virtual private cloud (VPC) type: For retired instance types, the disk device names and software license codes of a non-I/O optimized instance change when you upgrade the instance to an I/O optimized instance. For Linux instances, basic disks (cloud) are identified by the prefix xvd. Ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified by the prefix vd.
     * @example false
     *
     * @var bool
     */
    public $migrateAcrossZone;

    /**
     * @description The type of the operation. Valid values:
     *
     * >  This parameter is optional. The system can automatically determine whether the operation is an upgrade or a downgrade. If you want to specify this parameter, you can refer to the following valid values of the parameter.
     *
     *   upgrade: upgrades the instance type. Make sure that the balance in your account is sufficient.
     *   downgrade: downgrades the instance type. When the new instance type that is specified by the `InstanceType` parameter has lower specifications than the current instance type, set the `OperatorType` parameter to downgrade.
     *
     * >  You can refer to the preceding usage notes on how to upgrade or downgrade the instance type.
     * @example upgrade
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The restart time of the instance. Specify the time in the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-01-01T12:05Z
     *
     * @var string
     */
    public $rebootTime;

    /**
     * @description Specifies whether to immediately restart the instance after you change the instance type. Valid values:
     *
     *   true: immediately restarts the instance.
     *   false: does not immediately restart the instance.
     *
     * Default value: false.
     *
     * >  If the instance is in the **Stopping** state, the instance status remains unchanged and no operations are performed regardless of whether you set the `RebootWhenFinished` parameter to true.
     * @example false
     *
     * @var bool
     */
    public $rebootWhenFinished;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'systemDisk'           => 'SystemDisk',
        'autoPay'              => 'AutoPay',
        'clientToken'          => 'ClientToken',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'migrateAcrossZone'    => 'MigrateAcrossZone',
        'operatorType'         => 'OperatorType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rebootTime'           => 'RebootTime',
        'rebootWhenFinished'   => 'RebootWhenFinished',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->migrateAcrossZone) {
            $res['MigrateAcrossZone'] = $this->migrateAcrossZone;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rebootTime) {
            $res['RebootTime'] = $this->rebootTime;
        }
        if (null !== $this->rebootWhenFinished) {
            $res['RebootWhenFinished'] = $this->rebootWhenFinished;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrepayInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MigrateAcrossZone'])) {
            $model->migrateAcrossZone = $map['MigrateAcrossZone'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RebootTime'])) {
            $model->rebootTime = $map['RebootTime'];
        }
        if (isset($map['RebootWhenFinished'])) {
            $model->rebootWhenFinished = $map['RebootWhenFinished'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
