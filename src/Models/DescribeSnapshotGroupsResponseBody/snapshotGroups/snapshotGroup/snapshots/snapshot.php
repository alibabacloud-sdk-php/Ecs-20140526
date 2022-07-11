<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups\snapshotGroup\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var bool
     */
    public $instantAccess;

    /**
     * @var int
     */
    public $instantAccessRetentionDays;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'instantAccess'              => 'InstantAccess',
        'instantAccessRetentionDays' => 'InstantAccessRetentionDays',
        'progress'                   => 'Progress',
        'snapshotId'                 => 'SnapshotId',
        'sourceDiskId'               => 'SourceDiskId',
        'sourceDiskType'             => 'SourceDiskType',
        'tags'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instantAccess) {
            $res['InstantAccess'] = $this->instantAccess;
        }
        if (null !== $this->instantAccessRetentionDays) {
            $res['InstantAccessRetentionDays'] = $this->instantAccessRetentionDays;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstantAccess'])) {
            $model->instantAccess = $map['InstantAccess'];
        }
        if (isset($map['InstantAccessRetentionDays'])) {
            $model->instantAccessRetentionDays = $map['InstantAccessRetentionDays'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}