<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartImagePipelineExecutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'executionId' => 'ExecutionId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartImagePipelineExecutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}