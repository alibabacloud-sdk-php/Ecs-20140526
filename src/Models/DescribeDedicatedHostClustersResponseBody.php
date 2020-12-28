<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostClustersResponseBody extends Model
{
    /**
     * @var dedicatedHostClusters[]
     */
    public $dedicatedHostClusters;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'dedicatedHostClusters' => 'DedicatedHostClusters',
        'totalCount'            => 'TotalCount',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'pageNumber'            => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusters) {
            $res['DedicatedHostClusters'] = [];
            if (null !== $this->dedicatedHostClusters && \is_array($this->dedicatedHostClusters)) {
                $n = 0;
                foreach ($this->dedicatedHostClusters as $item) {
                    $res['DedicatedHostClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusters'])) {
            if (!empty($map['DedicatedHostClusters'])) {
                $model->dedicatedHostClusters = [];
                $n                            = 0;
                foreach ($map['DedicatedHostClusters'] as $item) {
                    $model->dedicatedHostClusters[$n++] = null !== $item ? dedicatedHostClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
