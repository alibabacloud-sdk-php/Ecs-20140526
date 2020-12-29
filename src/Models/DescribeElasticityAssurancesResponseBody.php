<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet;
use AlibabaCloud\Tea\Model;

class DescribeElasticityAssurancesResponseBody extends Model
{
    /**
     * @var elasticityAssuranceSet
     */
    public $elasticityAssuranceSet;

    /**
     * @var int
     */
    public $totalCount;

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
    public $maxResults;
    protected $_name = [
        'elasticityAssuranceSet' => 'ElasticityAssuranceSet',
        'totalCount'             => 'TotalCount',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'maxResults'             => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticityAssuranceSet) {
            $res['ElasticityAssuranceSet'] = null !== $this->elasticityAssuranceSet ? $this->elasticityAssuranceSet->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticityAssurancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticityAssuranceSet'])) {
            $model->elasticityAssuranceSet = elasticityAssuranceSet::fromMap($map['ElasticityAssuranceSet']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
