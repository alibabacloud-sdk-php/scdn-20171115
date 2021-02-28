<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval;

use AlibabaCloud\Tea\Model;

class httpCodeDataModule extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $proportion;

    /**
     * @var string
     */
    public $count;
    protected $_name = [
        'code'       => 'Code',
        'proportion' => 'Proportion',
        'count'      => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpCodeDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
