<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\price;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponseBody\priceInfo\rules;
use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    /**
     * @var rules
     */
    public $rules;

    /**
     * @var price
     */
    public $price;
    protected $_name = [
        'rules' => 'Rules',
        'price' => 'Price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return priceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        return $model;
    }
}
