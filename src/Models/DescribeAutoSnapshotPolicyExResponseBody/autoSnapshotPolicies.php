<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy;
use AlibabaCloud\Tea\Model;

class autoSnapshotPolicies extends Model
{
    /**
     * @var autoSnapshotPolicy[]
     */
    public $autoSnapshotPolicy;
    protected $_name = [
        'autoSnapshotPolicy' => 'AutoSnapshotPolicy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicy) {
            $res['AutoSnapshotPolicy'] = [];
            if (null !== $this->autoSnapshotPolicy && \is_array($this->autoSnapshotPolicy)) {
                $n = 0;
                foreach ($this->autoSnapshotPolicy as $item) {
                    $res['AutoSnapshotPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicy'])) {
            if (!empty($map['AutoSnapshotPolicy'])) {
                $model->autoSnapshotPolicy = [];
                $n = 0;
                foreach ($map['AutoSnapshotPolicy'] as $item) {
                    $model->autoSnapshotPolicy[$n++] = null !== $item ? autoSnapshotPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
