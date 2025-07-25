<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachInstanceRamRoleResponseBody\detachInstanceRamRoleResults\detachInstanceRamRoleResult\instanceRamRoleSets\instanceRamRoleSet;
use AlibabaCloud\Tea\Model;

class instanceRamRoleSets extends Model
{
    /**
     * @var instanceRamRoleSet[]
     */
    public $instanceRamRoleSet;
    protected $_name = [
        'instanceRamRoleSet' => 'InstanceRamRoleSet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRamRoleSet) {
            $res['InstanceRamRoleSet'] = [];
            if (null !== $this->instanceRamRoleSet && \is_array($this->instanceRamRoleSet)) {
                $n = 0;
                foreach ($this->instanceRamRoleSet as $item) {
                    $res['InstanceRamRoleSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRamRoleSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRamRoleSet'])) {
            if (!empty($map['InstanceRamRoleSet'])) {
                $model->instanceRamRoleSet = [];
                $n = 0;
                foreach ($map['InstanceRamRoleSet'] as $item) {
                    $model->instanceRamRoleSet[$n++] = null !== $item ? instanceRamRoleSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
