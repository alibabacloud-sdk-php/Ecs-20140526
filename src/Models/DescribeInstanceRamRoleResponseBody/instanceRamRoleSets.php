<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponseBody\instanceRamRoleSets\instanceRamRoleSet;

class instanceRamRoleSets extends Model
{
    /**
     * @var instanceRamRoleSet[]
     */
    public $instanceRamRoleSet;
    protected $_name = [
        'instanceRamRoleSet' => 'InstanceRamRoleSet',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRamRoleSet)) {
            Model::validateArray($this->instanceRamRoleSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRamRoleSet) {
            if (\is_array($this->instanceRamRoleSet)) {
                $res['InstanceRamRoleSet'] = [];
                $n1 = 0;
                foreach ($this->instanceRamRoleSet as $item1) {
                    $res['InstanceRamRoleSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRamRoleSet'])) {
            if (!empty($map['InstanceRamRoleSet'])) {
                $model->instanceRamRoleSet = [];
                $n1 = 0;
                foreach ($map['InstanceRamRoleSet'] as $item1) {
                    $model->instanceRamRoleSet[$n1++] = instanceRamRoleSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
