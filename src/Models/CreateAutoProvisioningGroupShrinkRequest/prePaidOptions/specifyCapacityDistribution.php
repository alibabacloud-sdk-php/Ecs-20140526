<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\prePaidOptions;

use AlibabaCloud\Dara\Model;

class specifyCapacityDistribution extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var int
     */
    public $minTargetCapacity;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'minTargetCapacity' => 'MinTargetCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minTargetCapacity) {
            $res['MinTargetCapacity'] = $this->minTargetCapacity;
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
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MinTargetCapacity'])) {
            $model->minTargetCapacity = $map['MinTargetCapacity'];
        }

        return $model;
    }
}
