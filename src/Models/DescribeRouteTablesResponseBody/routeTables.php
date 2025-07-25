<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable;
use AlibabaCloud\Tea\Model;

class routeTables extends Model
{
    /**
     * @var routeTable[]
     */
    public $routeTable;
    protected $_name = [
        'routeTable' => 'RouteTable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTable) {
            $res['RouteTable'] = [];
            if (null !== $this->routeTable && \is_array($this->routeTable)) {
                $n = 0;
                foreach ($this->routeTable as $item) {
                    $res['RouteTable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTable'])) {
            if (!empty($map['RouteTable'])) {
                $model->routeTable = [];
                $n = 0;
                foreach ($map['RouteTable'] as $item) {
                    $model->routeTable[$n++] = null !== $item ? routeTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
