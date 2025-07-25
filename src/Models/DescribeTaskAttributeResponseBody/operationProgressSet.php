<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet\operationProgress;
use AlibabaCloud\Tea\Model;

class operationProgressSet extends Model
{
    /**
     * @var operationProgress[]
     */
    public $operationProgress;
    protected $_name = [
        'operationProgress' => 'OperationProgress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationProgress) {
            $res['OperationProgress'] = [];
            if (null !== $this->operationProgress && \is_array($this->operationProgress)) {
                $n = 0;
                foreach ($this->operationProgress as $item) {
                    $res['OperationProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationProgressSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationProgress'])) {
            if (!empty($map['OperationProgress'])) {
                $model->operationProgress = [];
                $n = 0;
                foreach ($map['OperationProgress'] as $item) {
                    $model->operationProgress[$n++] = null !== $item ? operationProgress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
