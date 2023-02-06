<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;

use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to data disk N.
     *
     * @example sp-bp67acfmxazb4p****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of data disk N. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: ESSD
     *
     * For I/O optimized instances, the default value is cloud_efficiency. For non-I/O optimized instances, the default value is cloud.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to release data disk N when the instance is released. Valid values:
     *
     *   true: releases data disk N when the instance is released.
     *   false: does not release data disk N when the instance is released.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of data disk N. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testDataDiskDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     *
     * @example null
     *
     * @var string
     */
    public $device;

    /**
     * @description The name of data disk N. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testDataDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt data disk N.
     *
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The performance level of the ESSD used as data disk N. The value of N must be the same as that in `DataDisk.N.Category` when DataDisk.N.Category is set to cloud_essd. Default value: PL1. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 50000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of data disk N. Valid values of N: 1 to 16. Unit: GiB. Valid values:
     *
     *   Valid values when DataDisk.N.Category is set to cloud: 5 to 2000.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_efficiency: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_ssd: 20 to 32768.
     *
     *   Valid values when DataDisk.N.Category is set to cloud_essd: depend on the `DataDisk.N.PerformanceLevel` value.
     *
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL0: 40 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL1: 20 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL2: 461 to 32768.
     *   Valid values when DataDisk.N.PerformanceLevel is set to PL3: 1261 to 32768.
     *
     * The value of this parameter must be greater than or equal to the size of the snapshot specified by the `SnapshotId` parameter.
     * @example 2000
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot used to create data disk N. Valid values of N: 1 to 16. When the `DataDisk.N.SnapshotId` parameter is specified, the `DataDisk.N.Size` parameter is ignored. The data disk is created based on the size of the specified snapshot.
     *
     * Use snapshots created after July 15, 2013. Otherwise, an error is returned and your request is rejected.
     * @example s-bp17441ohwka0yuh****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'category'             => 'Category',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'device'               => 'Device',
        'diskName'             => 'DiskName',
        'encrypted'            => 'Encrypted',
        'performanceLevel'     => 'PerformanceLevel',
        'provisionedIops'      => 'ProvisionedIops',
        'size'                 => 'Size',
        'snapshotId'           => 'SnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
