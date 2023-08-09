<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\StartInstancesResponseBody\instanceResponses;
use AlibabaCloud\Tea\Model;

class StartInstancesResponseBody extends Model
{
    /**
     * @description The error code that is returned for the operation on the ECS instance. The value 200 indicates that the operation is successful. For more information, see the "Error codes" section in this topic.
     *
     * @var instanceResponses
     */
    public $instanceResponses;

    /**
     * @description The information about the ECS instance, such as the status of each instance before and after the operation is called and the operation results.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceResponses' => 'InstanceResponses',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = null !== $this->instanceResponses ? $this->instanceResponses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceResponses'])) {
            $model->instanceResponses = instanceResponses::fromMap($map['InstanceResponses']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
