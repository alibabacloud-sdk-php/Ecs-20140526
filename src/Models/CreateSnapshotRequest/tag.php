<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateSnapshotRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tags to add to the snapshot.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag key to add to the snapshot.
     *
     * > This parameter will be deprecated in the future. We recommend that you use the Tag.N.key parameter to ensure future compatibility.
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
