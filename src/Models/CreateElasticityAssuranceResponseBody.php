<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateElasticityAssuranceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'requestId'            => 'RequestId',
        'privatePoolOptionsId' => 'PrivatePoolOptionsId',
        'orderId'              => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateElasticityAssuranceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
