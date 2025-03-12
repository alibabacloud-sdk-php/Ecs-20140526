<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\prePaidOptions\specifyCapacityDistribution;
use AlibabaCloud\Tea\Model;

class prePaidOptions extends Model
{
    /**
     * @var specifyCapacityDistribution[]
     */
    public $specifyCapacityDistribution;
    protected $_name = [
        'specifyCapacityDistribution' => 'SpecifyCapacityDistribution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specifyCapacityDistribution) {
            $res['SpecifyCapacityDistribution'] = [];
            if (null !== $this->specifyCapacityDistribution && \is_array($this->specifyCapacityDistribution)) {
                $n = 0;
                foreach ($this->specifyCapacityDistribution as $item) {
                    $res['SpecifyCapacityDistribution'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prePaidOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecifyCapacityDistribution'])) {
            if (!empty($map['SpecifyCapacityDistribution'])) {
                $model->specifyCapacityDistribution = [];
                $n                                  = 0;
                foreach ($map['SpecifyCapacityDistribution'] as $item) {
                    $model->specifyCapacityDistribution[$n++] = null !== $item ? specifyCapacityDistribution::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
