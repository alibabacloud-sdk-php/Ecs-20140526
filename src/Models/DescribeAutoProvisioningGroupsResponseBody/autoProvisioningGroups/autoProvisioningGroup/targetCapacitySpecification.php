<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class targetCapacitySpecification extends Model
{
    /**
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @var float
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @var float
     */
    public $spotTargetCapacity;

    /**
     * @var float
     */
    public $totalTargetCapacity;
    protected $_name = [
        'defaultTargetCapacityType' => 'DefaultTargetCapacityType',
        'payAsYouGoTargetCapacity'  => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'        => 'SpotTargetCapacity',
        'totalTargetCapacity'       => 'TotalTargetCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetCapacitySpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }

        return $model;
    }
}