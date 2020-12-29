<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody\bandwidthPackageIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponseBody\forwardTableIds;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var bandwidthPackageIds
     */
    public $bandwidthPackageIds;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'forwardTableIds'     => 'ForwardTableIds',
        'bandwidthPackageIds' => 'BandwidthPackageIds',
        'natGatewayId'        => 'NatGatewayId',
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
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = null !== $this->bandwidthPackageIds ? $this->bandwidthPackageIds->toMap() : null;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['BandwidthPackageIds'])) {
            $model->bandwidthPackageIds = bandwidthPackageIds::fromMap($map['BandwidthPackageIds']);
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
