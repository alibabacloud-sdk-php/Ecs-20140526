<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;
use AlibabaCloud\Tea\Model;

class DescribeRouterInterfacesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var routerInterfaceSet
     */
    public $routerInterfaceSet;
    protected $_name = [
        'requestId'          => 'RequestId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'totalCount'         => 'TotalCount',
        'routerInterfaceSet' => 'RouterInterfaceSet',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->routerInterfaceSet) {
            $res['RouterInterfaceSet'] = null !== $this->routerInterfaceSet ? $this->routerInterfaceSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RouterInterfaceSet'])) {
            $model->routerInterfaceSet = routerInterfaceSet::fromMap($map['RouterInterfaceSet']);
        }

        return $model;
    }
}
