<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\features;
use AlibabaCloud\Tea\Model;

class importImageOptions extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $bootMode;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @var features
     */
    public $features;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var bool
     */
    public $retainImportedImage;
    protected $_name = [
        'architecture'        => 'Architecture',
        'bootMode'            => 'BootMode',
        'diskDeviceMappings'  => 'DiskDeviceMappings',
        'features'            => 'Features',
        'licenseType'         => 'LicenseType',
        'OSType'              => 'OSType',
        'platform'            => 'Platform',
        'retainImportedImage' => 'RetainImportedImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->retainImportedImage) {
            $res['RetainImportedImage'] = $this->retainImportedImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importImageOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }
        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }
        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RetainImportedImage'])) {
            $model->retainImportedImage = $map['RetainImportedImage'];
        }

        return $model;
    }
}
