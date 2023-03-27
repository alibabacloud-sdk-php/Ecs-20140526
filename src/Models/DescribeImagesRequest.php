<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @description The scenario in which to use the image. Default value: CreateEcs. Valid values:
     *
     *   CreateEcs: creates an instance.
     *   ChangeOS: replaces the system disk or operating system.
     *
     * @example CreateEcs
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The architecture of the image. Valid values:
     *
     *   i386
     *   x86\_64
     *   arm64
     *
     * @example i386
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Specifies whether to perform a dry run.
     *
     *   true: performs a dry run. The system checks your AccessKey pair, the permissions of the RAM user, and the required parameters. If the request fails the dry run, the corresponding error message is returned. If the check passes the dry run, the DryRunOperation error code is returned.
     *   false: performs a dry run and sends the request. If the request passes the dry run, a 2XX HTTP status code is returned and the operation is performed.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The list of filter conditions used to query resources.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The name of the image family. You can specify this parameter to query images of the specified image family.
     *
     * This parameter is empty by default.
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The IDs of the images.
     *
     * @example m-bp1g7004ksh0oeuc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The source of the image. Valid values:
     *
     *   system: public images provided by Alibaba Cloud. These are not available in Alibaba Cloud Marketplace.
     *
     *   self: custom images that you create.
     *
     *   others: shared images from other Alibaba Cloud accounts and community images that image providers released on the image platform of Alibaba Cloud Community. When you call this operation, take note of the following items:
     *
     *   To query community images, you must set the IsPublic parameter to true.
     *   To query shared images, you must set the IsPublic parameter to false or leave the IsPublic parameter empty.
     *
     *   marketplace: an image maintained by Alibaba Cloud or Independent Software Vendors (ISVs) in the Alibaba Cloud Marketplace. These images need to be purchased together with an Elastic Compute Service (ECS) instance. Before you use Alibaba Cloud Marketplace images, take note of the billing details of the images.
     *
     * > This parameter is empty by default, which indicates that public images provided by Alibaba Cloud, custom images in your repository, shared images from other Alibaba Cloud accounts, and community images published by other Alibaba Cloud accounts are queried.
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The ID of the Alibaba Cloud account to which the image belongs. This parameter is valid only when you query shared images or community images.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $imageOwnerId;

    /**
     * @description The instance type for which the image can be used.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether to query published community images. Valid values:
     *
     *   true: queries published community images. When you set this parameter to true, you must set the ImageOwnerAlias parameter to others.
     *   false: queries image types other than community images. The specific image types to be queried are determined by the ImageOwnerAlias parameter.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $isPublic;

    /**
     * @description Specifies whether the image supports cloud-init.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @description Specifies whether the image can be used on I/O optimized instances.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportIoOptimized;

    /**
     * @description The operating system type of the image. Valid values:
     *
     *   windows
     *   linux
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return per page.
     *
     * Default value: 10.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the image. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the custom image belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group are returned.
     *
     * > Resources in the default resource group are displayed in the response regardless of how this parameter is set.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether the subscription image has expired.
     *
     * > This parameter will be removed in the future. To ensure future compatibility, we recommend that you use other parameters.
     * @example false
     *
     * @var bool
     */
    public $showExpired;

    /**
     * @description The ID of the snapshot used to create the custom image.
     *
     * @example s-bp17ot2q7x72ggtw****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The state of the image. If you do not specify this parameter, only images in the Available state are returned. Valid values:
     *
     *   Creating: The image is being created.
     *   Waiting: The image is waiting to be processed.
     *   Available: The image is available. This is the default value.
     *   UnAvailable: The image is unavailable.
     *   CreateFailed: The image cannot be created.
     *   Deprecated: The image is discontinued.
     *
     * Default value: Available. You can specify multiple values for this parameter. Separate the values with commas (,).
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether the image is running on an ECS instance. Valid values:
     *
     *   instance: The image is in use and running on an ECS instance.
     *   none: The image is not in use.
     *
     * @example instance
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'actionType'           => 'ActionType',
        'architecture'         => 'Architecture',
        'dryRun'               => 'DryRun',
        'filter'               => 'Filter',
        'imageFamily'          => 'ImageFamily',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'imageOwnerId'         => 'ImageOwnerId',
        'instanceType'         => 'InstanceType',
        'isPublic'             => 'IsPublic',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'OSType'               => 'OSType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'showExpired'          => 'ShowExpired',
        'snapshotId'           => 'SnapshotId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'usage'                => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageOwnerId) {
            $res['ImageOwnerId'] = $this->imageOwnerId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }
        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->showExpired) {
            $res['ShowExpired'] = $this->showExpired;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageOwnerId'])) {
            $model->imageOwnerId = $map['ImageOwnerId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }
        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ShowExpired'])) {
            $model->showExpired = $map['ShowExpired'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
