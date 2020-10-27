<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class RebootInstancesRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string[]
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $forceReboot;

    /**
     * @var string
     */
    public $batchOptimization;
    protected $_name = [
        'dryRun'            => 'DryRun',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
        'forceReboot'       => 'ForceReboot',
        'batchOptimization' => 'BatchOptimization',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->forceReboot) {
            $res['ForceReboot'] = $this->forceReboot;
        }
        if (null !== $this->batchOptimization) {
            $res['BatchOptimization'] = $this->batchOptimization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ForceReboot'])) {
            $model->forceReboot = $map['ForceReboot'];
        }
        if (isset($map['BatchOptimization'])) {
            $model->batchOptimization = $map['BatchOptimization'];
        }

        return $model;
    }
}
