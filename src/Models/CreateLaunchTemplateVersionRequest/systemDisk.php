<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to the system disk.
     *
     * @example sp-bp1dgzpaxwc4load****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description This parameter is unavailable.
     *
     * @example true
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The category of the system disk. Valid values:
     *
     *   cloud: basic disk.
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: standard SSD.
     *   cloud_essd: enhanced SSD (ESSD). You can use the `SystemDisk.PerformanceLevel` parameter to set the performance level of the ESSD used as the system disk.
     *
     * For non-I/O optimized instances of retired instance types, the default value is cloud. For other instances, the default value is cloud_efficiency.
     * @example cloud_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description Specifies whether to release the system disk when the instance is released. Valid values:
     *
     *   true: releases the system disk when the instance is released.
     *   false: does not release the system disk when the instance is released.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The description of the system disk. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example testSystemDiskDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the system disk. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (.), underscores (\_), and hyphens (-).
     *
     * @example cloud_ssdSystem
     *
     * @var string
     */
    public $diskName;

    /**
     * @var string
     */
    public $encrypted;

    /**
     * @example 30000
     *
     * @var int
     */
    public $iops;

    /**
     * @description The performance level of the ESSD used as the system disk. Default value: PL0. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance levels, see [ESSDs](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description This parameter is unavailable.
     *
     * @example 50000
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @description The size of the system disk. Unit: GiB. Valid values: 20 to 500.
     *
     * The value of this parameter must be at least 20 and greater than or equal to the image size.
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled'      => 'BurstingEnabled',
        'category'             => 'Category',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'description'          => 'Description',
        'diskName'             => 'DiskName',
        'encrypted'            => 'Encrypted',
        'iops'                 => 'Iops',
        'performanceLevel'     => 'PerformanceLevel',
        'provisionedIops'      => 'ProvisionedIops',
        'size'                 => 'Size',
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
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
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
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
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

        return $model;
    }
}
