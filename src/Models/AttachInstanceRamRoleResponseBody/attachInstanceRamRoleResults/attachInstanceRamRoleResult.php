<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AttachInstanceRamRoleResponseBody\attachInstanceRamRoleResults;

use AlibabaCloud\Tea\Model;

class attachInstanceRamRoleResult extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example i-bp10ws62o04ubhvi****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'instanceId' => 'InstanceId',
        'message'    => 'Message',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachInstanceRamRoleResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
