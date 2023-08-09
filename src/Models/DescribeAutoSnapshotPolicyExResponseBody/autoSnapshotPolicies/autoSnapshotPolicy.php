<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy\tags;
use AlibabaCloud\Tea\Model;

class autoSnapshotPolicy extends Model
{
    /**
     * @description The retention period of the automatic snapshot. Unit: days. Valid values:
     *
     *   \-1: The automatic snapshot is retained until it is deleted.
     *   1 to 65536: The automatic snapshot is retained for the specified number of days.
     *
     * @example sp-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description >  This parameter is in invitational preview and unavailable for general users.
     *
     * @example testAutoSnapshotPolicyName
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example 0
     *
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @description The state of the automatic snapshot policy. Valid values:
     *
     *   Normal: The automatic snapshot policy is normal.
     *   Expire: The automatic snapshot policy cannot be used because your account has overdue payments.
     *
     * @example 2019-12-10T16:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description >  This parameter is in invitational preview and unavailable for general users.
     *
     * @example 1
     *
     * @var int
     */
    public $diskNums;

    /**
     * @description The days of the week on which to create automatic snapshots. Valid values: 1 to 7, which correspond to the days of the week. 1 indicates Monday. One or more days can be specified.
     *
     * @example false
     *
     * @var bool
     */
    public $enableCrossRegionCopy;

    /**
     * @description The number of disks to which the automatic snapshot policy is applied.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of extended volumes to which the automatic snapshot policy is applied.
     *
     * @example ["6"]
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description The tags of the automatic snapshot policy.
     *
     * @example rg-aek2kkmhmhs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The region ID of the automatic snapshot policy.
     *
     * @example 7
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The name of the automatic snapshot policy.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag value of the automatic snapshot policy.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description >  This parameter is in invitational preview and unavailable for general users.
     *
     * @example test
     *
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @description The time when the automatic snapshot policy was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example ["1"]
     *
     * @var string
     */
    public $timePoints;

    /**
     * @description The ID of the resource group.
     *
     * @example 2
     *
     * @var int
     */
    public $volumeNums;
    protected $_name = [
        'autoSnapshotPolicyId'         => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName'       => 'AutoSnapshotPolicyName',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'creationTime'                 => 'CreationTime',
        'diskNums'                     => 'DiskNums',
        'enableCrossRegionCopy'        => 'EnableCrossRegionCopy',
        'regionId'                     => 'RegionId',
        'repeatWeekdays'               => 'RepeatWeekdays',
        'resourceGroupId'              => 'ResourceGroupId',
        'retentionDays'                => 'RetentionDays',
        'status'                       => 'Status',
        'tags'                         => 'Tags',
        'targetCopyRegions'            => 'TargetCopyRegions',
        'timePoints'                   => 'TimePoints',
        'volumeNums'                   => 'VolumeNums',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diskNums) {
            $res['DiskNums'] = $this->diskNums;
        }
        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }
        if (null !== $this->volumeNums) {
            $res['VolumeNums'] = $this->volumeNums;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiskNums'])) {
            $model->diskNums = $map['DiskNums'];
        }
        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }
        if (isset($map['VolumeNums'])) {
            $model->volumeNums = $map['VolumeNums'];
        }

        return $model;
    }
}
