<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet;

use AlibabaCloud\Tea\Model;

class instanceCloudAssistantStatus extends Model
{
    /**
     * @description The number of tasks that Cloud Assistant was running on the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $activeTaskCount;

    /**
     * @description Indicates whether Cloud Assistant is running on the instance. Valid values:
     *
     *   true: Heartbeats are detected within 1 minute.
     *   false: No heartbeats are detected within 1 minute.
     *
     * @example true
     *
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @description The version number of the Cloud Assistant client. This parameter is empty if the Cloud Assistant client is not installed or is not running.
     *
     * @example 2.2.0.106
     *
     * @var string
     */
    public $cloudAssistantVersion;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1iudwa5b1tqa****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of tasks that Cloud Assistant completed on the instance.
     *
     * @example 2
     *
     * @var int
     */
    public $invocationCount;

    /**
     * @description The most recent heartbeat time of Cloud Assistant. The value is updated once every minute.
     *
     * @example 2021-03-15T09:00:00Z
     *
     * @var string
     */
    public $lastHeartbeatTime;

    /**
     * @description The time when commands were last run.
     *
     * @example 2021-03-15T08:00:00Z
     *
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @description The operating system of the instance. Valid values:
     *
     *   Windows
     *   Linux
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description Indicates whether Cloud Assistant supports Session Manager on the instance. If Cloud Assistant does not support Session Manager on the instance, an early Cloud Assistant version may be installed on the instance or Session Manager may not be supported in the specified region.
     *
     * @example true
     *
     * @var bool
     */
    public $supportSessionManager;
    protected $_name = [
        'activeTaskCount'       => 'ActiveTaskCount',
        'cloudAssistantStatus'  => 'CloudAssistantStatus',
        'cloudAssistantVersion' => 'CloudAssistantVersion',
        'instanceId'            => 'InstanceId',
        'invocationCount'       => 'InvocationCount',
        'lastHeartbeatTime'     => 'LastHeartbeatTime',
        'lastInvokedTime'       => 'LastInvokedTime',
        'OSType'                => 'OSType',
        'supportSessionManager' => 'SupportSessionManager',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTaskCount) {
            $res['ActiveTaskCount'] = $this->activeTaskCount;
        }
        if (null !== $this->cloudAssistantStatus) {
            $res['CloudAssistantStatus'] = $this->cloudAssistantStatus;
        }
        if (null !== $this->cloudAssistantVersion) {
            $res['CloudAssistantVersion'] = $this->cloudAssistantVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->lastInvokedTime) {
            $res['LastInvokedTime'] = $this->lastInvokedTime;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->supportSessionManager) {
            $res['SupportSessionManager'] = $this->supportSessionManager;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCloudAssistantStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTaskCount'])) {
            $model->activeTaskCount = $map['ActiveTaskCount'];
        }
        if (isset($map['CloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['CloudAssistantStatus'];
        }
        if (isset($map['CloudAssistantVersion'])) {
            $model->cloudAssistantVersion = $map['CloudAssistantVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['LastInvokedTime'])) {
            $model->lastInvokedTime = $map['LastInvokedTime'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['SupportSessionManager'])) {
            $model->supportSessionManager = $map['SupportSessionManager'];
        }

        return $model;
    }
}
