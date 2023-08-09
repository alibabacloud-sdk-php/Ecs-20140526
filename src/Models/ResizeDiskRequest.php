<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ResizeDiskRequest extends Model
{
    /**
     * @description The ID of the order.
     *
     * > This parameter is returned only when you resize subscription disks.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The method that you want to use to resize the disk. Default value: offline. Valid values:
     *
     *   offline: resizes the disk offline. After you resize a disk offline, you must restart its associated instance by using the Elastic Compute Service (ECS) console or by calling the [RebootInstance](~~25502~~) operation to make the resizing operation take effect. For information about how to restart an ECS instance in the ECS console, see [Restart an instance](~~25440~~).
     *   online: resizes the disk online. After you resize a disk online, the resizing operation takes effect immediately and you do not need to restart the instance. Ultra disks, standard SSDs, and ESSDs can be resized online.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description 32768
     *
     * @example 1900
     *
     * @var int
     */
    public $newSize;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new disk capacity. Unit: GiB. Valid values:
     *
     *   System disk: 20 to 500.
     *
     *   Data disk:
     *
     *   Ultra disk (cloud_efficiency): 20 to 32768.
     *
     *   Standard SSD (cloud_ssd): 20 to 32768.
     *
     *   ESSD (cloud_essd): Valid values when the NewSize parameter is set to cloud_essd depend on the `PerformanceLevel` value. You can call the [DescribeDisks](~~25514~~) operation to query disk information and check the `PerformanceLevel` value in the response.
     *
     *   Valid values when PerformanceLevel is set to PL0: 40 to 32768.
     *   Valid values when PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values when PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values when PerformanceLevel is set to PL3: 1261 to 32768.
     *
     *   Basic disk (cloud): 5 to 2000.
     *
     * The new disk capacity must be greater than the original disk capacity.
     * @example offline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'diskId'               => 'DiskId',
        'newSize'              => 'NewSize',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->newSize) {
            $res['NewSize'] = $this->newSize;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['NewSize'])) {
            $model->newSize = $map['NewSize'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
