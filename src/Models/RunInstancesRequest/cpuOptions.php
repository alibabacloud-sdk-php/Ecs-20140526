<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class cpuOptions extends Model
{
    /**
     * @description The number of CPU cores. This parameter cannot be specified but only uses its default value.
     *
     * For information about the default value, see [Customize CPU options](~~145895~~).
     * @example 2
     *
     * @var int
     */
    public $core;

    /**
     * @description This parameter is no longer used.
     *
     * @example 1
     *
     * @var string
     */
    public $numa;

    /**
     * @description The number of threads per CPU core. The following formula is used to calculate the number of vCPUs of the instance: `CpuOptions.Core` value × `CpuOptions.ThreadPerCore` value.
     *
     *   The following formula is used to calculate the number of vCPUs of the instance: `CpuOptions.Core` value × CpuOptions.ThreadPerCore value.
     *   This parameter is applicable only to specific instance types.
     *
     * For information about valid values and the default value, see [Customize CPU options](~~145895~~).
     * @example 2
     *
     * @var int
     */
    public $threadsPerCore;
    protected $_name = [
        'core'           => 'Core',
        'numa'           => 'Numa',
        'threadsPerCore' => 'ThreadsPerCore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->numa) {
            $res['Numa'] = $this->numa;
        }
        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['Numa'])) {
            $model->numa = $map['Numa'];
        }
        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        return $model;
    }
}
