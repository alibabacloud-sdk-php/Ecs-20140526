<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataResponseBody\eipMonitorDatas;

class DescribeEipMonitorDataResponseBody extends Model
{
    /**
     * @var eipMonitorDatas
     */
    public $eipMonitorDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eipMonitorDatas' => 'EipMonitorDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->eipMonitorDatas) {
            $this->eipMonitorDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipMonitorDatas) {
            $res['EipMonitorDatas'] = null !== $this->eipMonitorDatas ? $this->eipMonitorDatas->toArray($noStream) : $this->eipMonitorDatas;
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
        if (isset($map['EipMonitorDatas'])) {
            $model->eipMonitorDatas = eipMonitorDatas::fromMap($map['EipMonitorDatas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
