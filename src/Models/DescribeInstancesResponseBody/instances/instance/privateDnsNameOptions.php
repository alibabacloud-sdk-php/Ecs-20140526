<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class privateDnsNameOptions extends Model
{
    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $enableInstanceIdDnsAAAARecord;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $enableInstanceIdDnsARecord;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpDnsARecord;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIpDnsPtrRecord;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example Custom
     *
     * @var string
     */
    public $hostnameType;
    protected $_name = [
        'enableInstanceIdDnsAAAARecord' => 'EnableInstanceIdDnsAAAARecord',
        'enableInstanceIdDnsARecord'    => 'EnableInstanceIdDnsARecord',
        'enableIpDnsARecord'            => 'EnableIpDnsARecord',
        'enableIpDnsPtrRecord'          => 'EnableIpDnsPtrRecord',
        'hostnameType'                  => 'HostnameType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInstanceIdDnsAAAARecord) {
            $res['EnableInstanceIdDnsAAAARecord'] = $this->enableInstanceIdDnsAAAARecord;
        }
        if (null !== $this->enableInstanceIdDnsARecord) {
            $res['EnableInstanceIdDnsARecord'] = $this->enableInstanceIdDnsARecord;
        }
        if (null !== $this->enableIpDnsARecord) {
            $res['EnableIpDnsARecord'] = $this->enableIpDnsARecord;
        }
        if (null !== $this->enableIpDnsPtrRecord) {
            $res['EnableIpDnsPtrRecord'] = $this->enableIpDnsPtrRecord;
        }
        if (null !== $this->hostnameType) {
            $res['HostnameType'] = $this->hostnameType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateDnsNameOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInstanceIdDnsAAAARecord'])) {
            $model->enableInstanceIdDnsAAAARecord = $map['EnableInstanceIdDnsAAAARecord'];
        }
        if (isset($map['EnableInstanceIdDnsARecord'])) {
            $model->enableInstanceIdDnsARecord = $map['EnableInstanceIdDnsARecord'];
        }
        if (isset($map['EnableIpDnsARecord'])) {
            $model->enableIpDnsARecord = $map['EnableIpDnsARecord'];
        }
        if (isset($map['EnableIpDnsPtrRecord'])) {
            $model->enableIpDnsPtrRecord = $map['EnableIpDnsPtrRecord'];
        }
        if (isset($map['HostnameType'])) {
            $model->hostnameType = $map['HostnameType'];
        }

        return $model;
    }
}