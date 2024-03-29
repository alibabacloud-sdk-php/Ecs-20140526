<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag of the instance, disks, and primary ENI.
     *
     * The tag key cannot be an empty string. It can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of tag of the instance, disks, and primary ENI.
     *
     * The tag value can be an empty string. It can be up to 64 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
