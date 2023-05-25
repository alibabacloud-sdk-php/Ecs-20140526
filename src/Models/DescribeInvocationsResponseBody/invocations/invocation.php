<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\invokeInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsResponseBody\invocations\invocation\tags;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The Base64-encoded command content.
     *
     * @example cnBtIC1xYSB8IGdyZXAgdnNm****
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description The command ID.
     *
     * @example c-hz0jdfwcsr****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The command name.
     *
     * @example CommandTestName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The command type.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The container ID.
     *
     * @example ab141ddfbacfe02d9dbc25966ed971536124527097398d419a6746873fea****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The container name.
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The time when the command task was created.
     *
     * @example 2020-01-19T09:15:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The schedule on which to run the command. For information about the value specifications, see [Cron expression](~~64769~~).
     *
     * @example 0 *\/20 * * * *
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The overall execution state of the command. The value of this parameter depends on the execution states on all the involved instances. Valid values:
     *
     *   Pending: The command is being verified or sent. When the execution state on at least one instance is Pending, the overall execution state is Pending.
     *
     *   Scheduled: The command scheduled to run is sent and pending execution. When the execution state on at least one instance is Scheduled, the overall execution state is Scheduled.
     *
     *   Running: The command is being run on the instances. When the execution state on at least one instance is Running, the overall execution state is Running.
     *
     *   Success: When the execution state on at least one instance is Success and the execution state on other instances is Stopped or Success, the overall execution state is Success.
     *
     *   Command that is set to run only once: The execution is complete, and the exit code is 0.
     *   Command that is set to run on a schedule: The last execution is complete, the exit code is 0, and the specified cycle ends.
     *
     *   Failed: When the execution state on all instances is Stopped or Failed, the overall execution state is Failed. When the execution state on an instance is one of the following values, Failed is returned as the overall execution state:
     *
     *   Invalid: The command is invalid.
     *   Aborted: The command failed to be sent.
     *   Failed: The command execution is complete, but the exit code is not 0.
     *   Timeout: The execution timed out.
     *   Error: An error occurred while the command was being run on the instance.
     *
     *   Stopping: The command task is being stopped. When the execution state on at least one instance is Stopping, the overall execution state is Stopping.
     *
     *   Stopped: The command task is stopped. When the execution state on all instances is Stopped, the overall execution state is Stopped. When the execution state on an instance is one of the following values, Stopped is returned as the overall execution state:
     *
     *   Cancelled: The command task is canceled.
     *   Terminated: The command task is terminated.
     *
     *   PartialFailed: The execution is complete on some instances and fails on other instances. When the execution state is Success on some instances and is Failed or Stopped on other instances, the overall execution state is PartialFailed.
     *
     * > The `InvokeStatus` response parameter functions similarly to this parameter. We recommend that you ignore InvokeStatus and check the value of InvocationStatus.
     * @example Running
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The command task ID.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description Details about the instances on which the command is run.
     *
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @description The overall execution state of the command.
     *
     * > We recommend that you ignore this parameter and check the value of the `InvocationStatus` response parameter for the overall execution state.
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The custom parameters in the command.
     *
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @description Indicates the execution mode of the command. Valid values:
     *
     *   Once: immediately runs the command.
     *   Period: The command is run on a schedule.
     *   NextRebootOnly: The command is automatically run the next time the instance starts.
     *   EveryReboot: automatically runs the command every time the instance starts.
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The tags of the command task.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the command is to be automatically run.
     *
     * @example false
     *
     * @var bool
     */
    public $timed;

    /**
     * @description The maximum timeout period for the command execution on the instance. Unit: seconds.
     *
     * When a command cannot be run, the command execution times out. When a command execution times out, the Cloud Assistant client forcefully terminates the command process by canceling the PID of the command.
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The username that was used to run the command on the instance.
     *
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description The execution path of the command.
     *
     * @example /home/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'     => 'CommandContent',
        'commandDescription' => 'CommandDescription',
        'commandId'          => 'CommandId',
        'commandName'        => 'CommandName',
        'commandType'        => 'CommandType',
        'containerId'        => 'ContainerId',
        'containerName'      => 'ContainerName',
        'creationTime'       => 'CreationTime',
        'frequency'          => 'Frequency',
        'invocationStatus'   => 'InvocationStatus',
        'invokeId'           => 'InvokeId',
        'invokeInstances'    => 'InvokeInstances',
        'invokeStatus'       => 'InvokeStatus',
        'parameters'         => 'Parameters',
        'repeatMode'         => 'RepeatMode',
        'tags'               => 'Tags',
        'timed'              => 'Timed',
        'timeout'            => 'Timeout',
        'username'           => 'Username',
        'workingDir'         => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandDescription) {
            $res['CommandDescription'] = $this->commandDescription;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toMap() : null;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandDescription'])) {
            $model->commandDescription = $map['CommandDescription'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
