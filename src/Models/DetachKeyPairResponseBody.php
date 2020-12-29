<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DetachKeyPairResponseBody\results;
use AlibabaCloud\Tea\Model;

class DetachKeyPairResponseBody extends Model
{
    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var results
     */
    public $results;

    /**
     * @var string
     */
    public $failCount;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'results'     => 'Results',
        'failCount'   => 'FailCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachKeyPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        return $model;
    }
}
