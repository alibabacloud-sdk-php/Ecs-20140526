<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTasksResponseBody\taskSet\task;
use AlibabaCloud\Tea\Model;

class taskSet extends Model
{
    /**
     * @var task[]
     */
    public $task;
    protected $_name = [
        'task' => 'Task',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->task) {
            $res['Task'] = [];
            if (null !== $this->task && \is_array($this->task)) {
                $n = 0;
                foreach ($this->task as $item) {
                    $res['Task'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n = 0;
                foreach ($map['Task'] as $item) {
                    $model->task[$n++] = null !== $item ? task::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
