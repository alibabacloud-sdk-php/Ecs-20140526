<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateDiskRequest;

use AlibabaCloud\Tea\Model;

class arn extends Model
{
    /**
     * @var int
     */
    public $assumeRoleFor;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $rolearn;
    protected $_name = [
        'assumeRoleFor' => 'AssumeRoleFor',
        'roleType'      => 'RoleType',
        'rolearn'       => 'Rolearn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->rolearn) {
            $res['Rolearn'] = $this->rolearn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['Rolearn'])) {
            $model->rolearn = $map['Rolearn'];
        }

        return $model;
    }
}
