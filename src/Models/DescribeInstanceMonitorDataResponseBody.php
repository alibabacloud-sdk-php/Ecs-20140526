<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody\monitorData;

class DescribeInstanceMonitorDataResponseBody extends Model
{
    /**
     * @var monitorData
     */
    public $monitorData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorData' => 'MonitorData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->monitorData) {
            $this->monitorData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorData) {
            $res['MonitorData'] = null !== $this->monitorData ? $this->monitorData->toArray($noStream) : $this->monitorData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorData'])) {
            $model->monitorData = monitorData::fromMap($map['MonitorData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
