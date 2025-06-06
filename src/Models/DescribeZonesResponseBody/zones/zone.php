<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableDedicatedHostTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableDiskCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableInstanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResourceCreation;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableVolumeCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\dedicatedHostGenerations;

class zone extends Model
{
    /**
     * @var availableDedicatedHostTypes
     */
    public $availableDedicatedHostTypes;

    /**
     * @var availableDiskCategories
     */
    public $availableDiskCategories;

    /**
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @var availableResourceCreation
     */
    public $availableResourceCreation;

    /**
     * @var availableResources
     */
    public $availableResources;

    /**
     * @var availableVolumeCategories
     */
    public $availableVolumeCategories;

    /**
     * @var dedicatedHostGenerations
     */
    public $dedicatedHostGenerations;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'availableDedicatedHostTypes' => 'AvailableDedicatedHostTypes',
        'availableDiskCategories' => 'AvailableDiskCategories',
        'availableInstanceTypes' => 'AvailableInstanceTypes',
        'availableResourceCreation' => 'AvailableResourceCreation',
        'availableResources' => 'AvailableResources',
        'availableVolumeCategories' => 'AvailableVolumeCategories',
        'dedicatedHostGenerations' => 'DedicatedHostGenerations',
        'localName' => 'LocalName',
        'zoneId' => 'ZoneId',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        if (null !== $this->availableDedicatedHostTypes) {
            $this->availableDedicatedHostTypes->validate();
        }
        if (null !== $this->availableDiskCategories) {
            $this->availableDiskCategories->validate();
        }
        if (null !== $this->availableInstanceTypes) {
            $this->availableInstanceTypes->validate();
        }
        if (null !== $this->availableResourceCreation) {
            $this->availableResourceCreation->validate();
        }
        if (null !== $this->availableResources) {
            $this->availableResources->validate();
        }
        if (null !== $this->availableVolumeCategories) {
            $this->availableVolumeCategories->validate();
        }
        if (null !== $this->dedicatedHostGenerations) {
            $this->dedicatedHostGenerations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableDedicatedHostTypes) {
            $res['AvailableDedicatedHostTypes'] = null !== $this->availableDedicatedHostTypes ? $this->availableDedicatedHostTypes->toArray($noStream) : $this->availableDedicatedHostTypes;
        }

        if (null !== $this->availableDiskCategories) {
            $res['AvailableDiskCategories'] = null !== $this->availableDiskCategories ? $this->availableDiskCategories->toArray($noStream) : $this->availableDiskCategories;
        }

        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = null !== $this->availableInstanceTypes ? $this->availableInstanceTypes->toArray($noStream) : $this->availableInstanceTypes;
        }

        if (null !== $this->availableResourceCreation) {
            $res['AvailableResourceCreation'] = null !== $this->availableResourceCreation ? $this->availableResourceCreation->toArray($noStream) : $this->availableResourceCreation;
        }

        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toArray($noStream) : $this->availableResources;
        }

        if (null !== $this->availableVolumeCategories) {
            $res['AvailableVolumeCategories'] = null !== $this->availableVolumeCategories ? $this->availableVolumeCategories->toArray($noStream) : $this->availableVolumeCategories;
        }

        if (null !== $this->dedicatedHostGenerations) {
            $res['DedicatedHostGenerations'] = null !== $this->dedicatedHostGenerations ? $this->dedicatedHostGenerations->toArray($noStream) : $this->dedicatedHostGenerations;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDedicatedHostTypes'])) {
            $model->availableDedicatedHostTypes = availableDedicatedHostTypes::fromMap($map['AvailableDedicatedHostTypes']);
        }

        if (isset($map['AvailableDiskCategories'])) {
            $model->availableDiskCategories = availableDiskCategories::fromMap($map['AvailableDiskCategories']);
        }

        if (isset($map['AvailableInstanceTypes'])) {
            $model->availableInstanceTypes = availableInstanceTypes::fromMap($map['AvailableInstanceTypes']);
        }

        if (isset($map['AvailableResourceCreation'])) {
            $model->availableResourceCreation = availableResourceCreation::fromMap($map['AvailableResourceCreation']);
        }

        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }

        if (isset($map['AvailableVolumeCategories'])) {
            $model->availableVolumeCategories = availableVolumeCategories::fromMap($map['AvailableVolumeCategories']);
        }

        if (isset($map['DedicatedHostGenerations'])) {
            $model->dedicatedHostGenerations = dedicatedHostGenerations::fromMap($map['DedicatedHostGenerations']);
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
