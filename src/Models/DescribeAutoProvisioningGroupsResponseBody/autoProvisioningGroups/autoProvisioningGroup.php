<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\payAsYouGoOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\spotOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\targetCapacitySpecification;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroup extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $terminateInstances;

    /**
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $validFrom;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @var launchTemplateConfigs
     */
    public $launchTemplateConfigs;

    /**
     * @var spotOptions
     */
    public $spotOptions;

    /**
     * @var payAsYouGoOptions
     */
    public $payAsYouGoOptions;

    /**
     * @var targetCapacitySpecification
     */
    public $targetCapacitySpecification;
    protected $_name = [
        'creationTime'                     => 'CreationTime',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'status'                           => 'Status',
        'terminateInstances'               => 'TerminateInstances',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'state'                            => 'State',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'validFrom'                        => 'ValidFrom',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'regionId'                         => 'RegionId',
        'validUntil'                       => 'ValidUntil',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'launchTemplateConfigs'            => 'LaunchTemplateConfigs',
        'spotOptions'                      => 'SpotOptions',
        'payAsYouGoOptions'                => 'PayAsYouGoOptions',
        'targetCapacitySpecification'      => 'TargetCapacitySpecification',
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
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->launchTemplateConfigs) {
            $res['LaunchTemplateConfigs'] = null !== $this->launchTemplateConfigs ? $this->launchTemplateConfigs->toMap() : null;
        }
        if (null !== $this->spotOptions) {
            $res['SpotOptions'] = null !== $this->spotOptions ? $this->spotOptions->toMap() : null;
        }
        if (null !== $this->payAsYouGoOptions) {
            $res['PayAsYouGoOptions'] = null !== $this->payAsYouGoOptions ? $this->payAsYouGoOptions->toMap() : null;
        }
        if (null !== $this->targetCapacitySpecification) {
            $res['TargetCapacitySpecification'] = null !== $this->targetCapacitySpecification ? $this->targetCapacitySpecification->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProvisioningGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['LaunchTemplateConfigs'])) {
            $model->launchTemplateConfigs = launchTemplateConfigs::fromMap($map['LaunchTemplateConfigs']);
        }
        if (isset($map['SpotOptions'])) {
            $model->spotOptions = spotOptions::fromMap($map['SpotOptions']);
        }
        if (isset($map['PayAsYouGoOptions'])) {
            $model->payAsYouGoOptions = payAsYouGoOptions::fromMap($map['PayAsYouGoOptions']);
        }
        if (isset($map['TargetCapacitySpecification'])) {
            $model->targetCapacitySpecification = targetCapacitySpecification::fromMap($map['TargetCapacitySpecification']);
        }

        return $model;
    }
}
