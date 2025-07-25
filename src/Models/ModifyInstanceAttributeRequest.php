<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\privateDnsNameOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\remoteConnectionOptions;
use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard
     *   Unlimited
     *
     * For more information about the performance modes of burstable instances, see [Overview](https://help.aliyun.com/document_detail/59977.html).
     *
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The release protection attribute of the instance. This parameter specifies whether you can use the ECS console or call the [DeleteInstance](https://help.aliyun.com/document_detail/25507.html) operation to release the instance.
     *
     * >  This parameter is applicable only to pay-as-you-go instances. The release protection attribute can protect instances against manual releases, but not against automatic releases.
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the instance. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testInstanceDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the Jumbo Frames feature for the instance. Valid values:
     *
     *   true: The Jumbo Frame feature is enabled for the instance.
     *   false: The Jumbo Frame feature is disabled for the instance.
     *
     * Take note of the following items:
     *
     *   The instance must be in the Running (`Running`) or Stopped (`Stopped`) state.
     *   The instance must reside in a VPC.
     *   After the Jumbo Frames feature is enabled, the MTU value of the instance is set to 8500. After the Jumbo Frames feature is disabled, the MTU value of the instance is set to 1500. You can enable the Jumbo Frames feature only for specific instance types. For more information, see [Jumbo Frames](https://help.aliyun.com/document_detail/200512.html).
     *
     * @example false
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @var bool
     */
    public $enableNetworkEncryption;

    /**
     * @description The hostname of the instance. Take note of the following items:
     *
     *   The instance cannot be in the Creating (`Pending`) or Starting (`Starting`) state. Otherwise, the new hostname and the configurations in the `/etc/hosts` file may not take effect. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/25506.html) operation to query the status of the instance.
     *   The parameter takes effect after the instance is restarted. You can restart an instance in the ECS console. For more information, see [Restart an instance](https://help.aliyun.com/document_detail/25440.html). You can also call the [RebootInstance](https://help.aliyun.com/document_detail/25502.html) operation to restart the instance. The parameter cannot take effect if you restart an instance within the operating system.
     *
     * The following limits apply to the hostnames of instances that run different operating systems:
     *
     *   For Windows Server, the hostname must be 2 to 15 characters in length and can contain letters, digits, and hyphens (-). The hostname cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *   For other operating systems such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate a hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-). The hostname cannot contain consecutive periods (.) or hyphens (-). The hostname cannot start or end with a period (.) or a hyphen (-).
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of queues supported by the primary elastic network interface (ENI) of the instance. Take note of the following items:
     *
     *   The instance must be in the Stopped (`Stopped`) state.
     *   The number of queues supported by an ENI cannot exceed the maximum number of queues that the instance type allows for each ENI. The total number of queues on all ENIs on the instance cannot exceed the queue quota that the instance type supports. To query the maximum number of queues that an instance type allows for each ENI and the queue quota for the instance type, call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation.
     *   If you set this parameter to -1, the value is reset to the default value for the instance type. To query the default number of queues of an ENI of each instance type, call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation.
     *
     * @example 8
     *
     * @var int
     */
    public $networkInterfaceQueueNumber;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the instance. The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include **( ) \\` ~ ! @ # $ % ^ & \\* - _ + = | { } [ ] : ; \\" < > , . ? /** The password of a Windows instance cannot start with a forward slash (/). Take note of the following items:
     *
     *   The instance cannot be in the Starting (`Starting`) state.
     *   The parameter takes effect after the instance is restarted. You can restart an instance in the ECS console. For more information, see [Restart an instance](https://help.aliyun.com/document_detail/25440.html). You can also call the [RebootInstance](https://help.aliyun.com/document_detail/25502.html) operation to restart the instance. The parameter cannot take effect if you restart an instance within the operating system.
     *
     * >  For security reasons, we recommend that you use HTTPS to send requests if `Password` is specified.
     *
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The private domain name options of the ECS instance.
     *
     * For information about private domain name resolution, see [ECS private DNS resolution](https://help.aliyun.com/document_detail/2844797.html).
     *
     * @var privateDnsNameOptions
     */
    public $privateDnsNameOptions;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example hide
     *
     * @var bool
     */
    public $recyclable;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @var remoteConnectionOptions
     */
    public $remoteConnectionOptions;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IDs of the new security groups to which to assign the instance. Take note of the following items:
     *
     *   The security group IDs in the array cannot be duplicate. The length of the array is related to the quota of security groups to which the instance can be assigned. For more information, see the [Security group limits](~~25412#SecurityGroupQuota1~~) section in the "Limits and quotas" topic.
     *   The instance is moved from the current security groups to the replacement security groups. If you want the instance to remain in the current security groups, add the IDs of the current security groups to the array.
     *   You can move the instance to security groups of a different type. However, the array cannot contain the IDs of both basic and advanced security groups.
     *   The security groups and the instance must belong to the same VPC.
     *   Security groups of instances in the classic network cannot be changed.
     *
     * >  New security groups become valid for the instance after a short delay.
     *
     * @example sg-bp15ed6xe1yxeycg7o****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The user data of the instance. We recommend that you encode the data in Base64. Take note of the following items:
     *
     *   The instance must meet the limits for user data. For more information, see [Initialize an instance by using instance user data](https://help.aliyun.com/document_detail/49121.html).
     *   After you restart the instance, the new user data is displayed but not run as scripts.
     *
     * >  The maximum size of the raw data before encoding is 32 KB. We recommend that you do not pass in confidential information such as passwords and private keys in plaintext. If you must pass in confidential information, we recommend that you encrypt and Base64-encode the information before you pass it in. Then, you can decode and decrypt the information in the same way within the instance.
     *
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cpuOptions' => 'CpuOptions',
        'creditSpecification' => 'CreditSpecification',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'enableJumboFrame' => 'EnableJumboFrame',
        'enableNetworkEncryption' => 'EnableNetworkEncryption',
        'hostName' => 'HostName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'networkInterfaceQueueNumber' => 'NetworkInterfaceQueueNumber',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'privateDnsNameOptions' => 'PrivateDnsNameOptions',
        'recyclable' => 'Recyclable',
        'remoteConnectionOptions' => 'RemoteConnectionOptions',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupIds' => 'SecurityGroupIds',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toMap() : null;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->enableNetworkEncryption) {
            $res['EnableNetworkEncryption'] = $this->enableNetworkEncryption;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->networkInterfaceQueueNumber) {
            $res['NetworkInterfaceQueueNumber'] = $this->networkInterfaceQueueNumber;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->privateDnsNameOptions) {
            $res['PrivateDnsNameOptions'] = null !== $this->privateDnsNameOptions ? $this->privateDnsNameOptions->toMap() : null;
        }
        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }
        if (null !== $this->remoteConnectionOptions) {
            $res['RemoteConnectionOptions'] = null !== $this->remoteConnectionOptions ? $this->remoteConnectionOptions->toMap() : null;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['EnableNetworkEncryption'])) {
            $model->enableNetworkEncryption = $map['EnableNetworkEncryption'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['NetworkInterfaceQueueNumber'])) {
            $model->networkInterfaceQueueNumber = $map['NetworkInterfaceQueueNumber'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['PrivateDnsNameOptions'])) {
            $model->privateDnsNameOptions = privateDnsNameOptions::fromMap($map['PrivateDnsNameOptions']);
        }
        if (isset($map['Recyclable'])) {
            $model->recyclable = $map['Recyclable'];
        }
        if (isset($map['RemoteConnectionOptions'])) {
            $model->remoteConnectionOptions = remoteConnectionOptions::fromMap($map['RemoteConnectionOptions']);
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
