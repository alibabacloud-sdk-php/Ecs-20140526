<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;
use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupHistoryResponseBody extends Model
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
     * @var int
     */
    public $pageNumber;

    /**
     * @var autoProvisioningGroupHistories
     */
    public $autoProvisioningGroupHistories;
    protected $_name = [
        'totalCount'                     => 'TotalCount',
        'pageSize'                       => 'PageSize',
        'requestId'                      => 'RequestId',
        'pageNumber'                     => 'PageNumber',
        'autoProvisioningGroupHistories' => 'AutoProvisioningGroupHistories',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->autoProvisioningGroupHistories) {
            $res['AutoProvisioningGroupHistories'] = null !== $this->autoProvisioningGroupHistories ? $this->autoProvisioningGroupHistories->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupHistoryResponseBody
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['AutoProvisioningGroupHistories'])) {
            $model->autoProvisioningGroupHistories = autoProvisioningGroupHistories::fromMap($map['AutoProvisioningGroupHistories']);
        }

        return $model;
    }
}
