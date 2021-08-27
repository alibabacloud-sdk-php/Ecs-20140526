<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent;
use AlibabaCloud\Tea\Model;

class DescribeImageComponentsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var imageComponent
     */
    public $imageComponent;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'maxResults'     => 'MaxResults',
        'imageComponent' => 'ImageComponent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->imageComponent) {
            $res['ImageComponent'] = null !== $this->imageComponent ? $this->imageComponent->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageComponentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ImageComponent'])) {
            $model->imageComponent = imageComponent::fromMap($map['ImageComponent']);
        }

        return $model;
    }
}
