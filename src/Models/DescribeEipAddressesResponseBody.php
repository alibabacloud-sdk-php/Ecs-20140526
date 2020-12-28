<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponseBody\eipAddresses;
use AlibabaCloud\Tea\Model;

class DescribeEipAddressesResponseBody extends Model
{
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
     * @var eipAddresses[]
     */
    public $eipAddresses;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'eipAddresses' => 'EipAddresses',
        'pageNumber'   => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = [];
            if (null !== $this->eipAddresses && \is_array($this->eipAddresses)) {
                $n = 0;
                foreach ($this->eipAddresses as $item) {
                    $res['EipAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipAddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = [];
                $n                   = 0;
                foreach ($map['EipAddresses'] as $item) {
                    $model->eipAddresses[$n++] = null !== $item ? eipAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
