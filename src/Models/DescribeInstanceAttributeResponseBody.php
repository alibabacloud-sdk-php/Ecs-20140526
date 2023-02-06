<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\dedicatedHostAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\eipAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\innerIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\publicIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\vpcAttributes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAttributeResponseBody extends Model
{
    /**
     * @description The ID of the cluster to which the instance belongs.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example cls-bp67acfmxazb4p****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of vCPUs.
     *
     * @example 8
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://icms.alibaba-inc.com/content/ecs/api?l=1&m=277&n=10049).
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     * - Unlimited: unlimited mode. For more information, see the "Unlimited mode" section in [Overview](https://www.alibabacloud.com/help/en/elastic-compute-service/latest/burstable-instance-types-overview#section-svb-w9d-dju).
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description Details about the dedicated host. It is an array that consists of the DedicatedHostClusterId, DedicatedHostId, and DedicatedHostName parameters.
     *
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @description The description of the instance.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Details about the elastic IP address (EIP) associated with the instance.
     *
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://icms.alibaba-inc.com/content/ecs/api?l=1&m=277&n=10049).
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The hostname of the instance.
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image that the instance is running.
     *
     * @example m-bp1h46wfpjsjastc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The internal IP address of the instance located in the classic network.
     *
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @description The billing method of the instance. Valid values:
     *
     * - PostPaid: pay-as-you-go
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of instance.
     *
     * @example i-uf6f5trc95ug8t33****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The network type of the instance. Valid values:
     *
     * - vpc
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method for network usage. Valid values:
     *
     * - PayByTraffic: pay-by-traffic
     *
     * >  When the **pay-by-traffic** billing method for network usage is used, the maximum inbound and outbound bandwidth values are used as upper limits of bandwidths instead of guaranteed performance specifications. In scenarios where demand outstrips resource supplies, these maximum bandwidth values may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Indicates whether the instance is I/O optimized.
     *
     * @example true
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The memory size of the instance. Unit: MiB.
     *
     * @example 16384
     *
     * @var int
     */
    public $memory;

    /**
     * @description The reason why the instance was locked. Valid values:
     *
     * - refunded: The instance was locked because a refund was made for the instance.
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The public IP address of the instance.
     *
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the security groups to which the instance belongs.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The serial number of the instance.
     *
     * @example 51d1353b-22bf-4567-a176-8b3e12e4****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The state of the instance. Valid values:
     *
     * - Stopped: The instance is stopped.
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the instance continues to be billed after it is stopped. Valid values:
     *
     * - Not-applicable: Economical mode is not applicable to the instance.
     * @example KeepCharging
     *
     * @var string
     */
    public $stoppedMode;

    /**
     * @description The virtual LAN (VLAN) ID of the instance.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example 10
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description The virtual private cloud (VPC) attributes of the instance.
     *
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'cpu'                     => 'Cpu',
        'creationTime'            => 'CreationTime',
        'creditSpecification'     => 'CreditSpecification',
        'dedicatedHostAttribute'  => 'DedicatedHostAttribute',
        'description'             => 'Description',
        'eipAddress'              => 'EipAddress',
        'expiredTime'             => 'ExpiredTime',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'innerIpAddress'          => 'InnerIpAddress',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'instanceType'            => 'InstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized'             => 'IoOptimized',
        'memory'                  => 'Memory',
        'operationLocks'          => 'OperationLocks',
        'publicIpAddress'         => 'PublicIpAddress',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'securityGroupIds'        => 'SecurityGroupIds',
        'serialNumber'            => 'SerialNumber',
        'status'                  => 'Status',
        'stoppedMode'             => 'StoppedMode',
        'vlanId'                  => 'VlanId',
        'vpcAttributes'           => 'VpcAttributes',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toMap() : null;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = innerIpAddress::fromMap($map['InnerIpAddress']);
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
