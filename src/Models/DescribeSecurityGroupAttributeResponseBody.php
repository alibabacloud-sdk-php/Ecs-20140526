<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody\permissions;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var permissions
     */
    public $permissions;

    /**
     * @var string
     */
    public $innerAccessPolicy;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description'       => 'Description',
        'vpcId'             => 'VpcId',
        'requestId'         => 'RequestId',
        'securityGroupName' => 'SecurityGroupName',
        'securityGroupId'   => 'SecurityGroupId',
        'permissions'       => 'Permissions',
        'innerAccessPolicy' => 'InnerAccessPolicy',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = null !== $this->permissions ? $this->permissions->toMap() : null;
        }
        if (null !== $this->innerAccessPolicy) {
            $res['InnerAccessPolicy'] = $this->innerAccessPolicy;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Permissions'])) {
            $model->permissions = permissions::fromMap($map['Permissions']);
        }
        if (isset($map['InnerAccessPolicy'])) {
            $model->innerAccessPolicy = $map['InnerAccessPolicy'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
