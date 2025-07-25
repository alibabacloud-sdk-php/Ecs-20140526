<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroups extends Model
{
    /**
     * @var autoProvisioningGroup[]
     */
    public $autoProvisioningGroup;
    protected $_name = [
        'autoProvisioningGroup' => 'AutoProvisioningGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroup) {
            $res['AutoProvisioningGroup'] = [];
            if (null !== $this->autoProvisioningGroup && \is_array($this->autoProvisioningGroup)) {
                $n = 0;
                foreach ($this->autoProvisioningGroup as $item) {
                    $res['AutoProvisioningGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProvisioningGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroup'])) {
            if (!empty($map['AutoProvisioningGroup'])) {
                $model->autoProvisioningGroup = [];
                $n = 0;
                foreach ($map['AutoProvisioningGroup'] as $item) {
                    $model->autoProvisioningGroup[$n++] = null !== $item ? autoProvisioningGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
