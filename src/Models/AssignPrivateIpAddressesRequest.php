<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description eniId
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description privateIpAddresses
     *
     * @var array
     */
    public $privateIpAddress;

    /**
     * @description privateIpCount
     *
     * @var int
     */
    public $secondaryPrivateIpAddressCount;
    protected $_name = [
        'ownerId'                        => 'OwnerId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'ownerAccount'                   => 'OwnerAccount',
        'regionId'                       => 'RegionId',
        'networkInterfaceId'             => 'NetworkInterfaceId',
        'privateIpAddress'               => 'PrivateIpAddress',
        'secondaryPrivateIpAddressCount' => 'SecondaryPrivateIpAddressCount',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = [];
            if (null !== $this->privateIpAddress) {
                $res['PrivateIpAddress'] = $this->privateIpAddress;
            }
        }
        if (null !== $this->secondaryPrivateIpAddressCount) {
            $res['SecondaryPrivateIpAddressCount'] = $this->secondaryPrivateIpAddressCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }
        if (isset($map['SecondaryPrivateIpAddressCount'])) {
            $model->secondaryPrivateIpAddressCount = $map['SecondaryPrivateIpAddressCount'];
        }

        return $model;
    }
}
