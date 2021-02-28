<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class DescribeScdnUserProtectInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $serviceDDoS;
    protected $_name = [
        'requestId'   => 'RequestId',
        'serviceDDoS' => 'ServiceDDoS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceDDoS) {
            $res['ServiceDDoS'] = $this->serviceDDoS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnUserProtectInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceDDoS'])) {
            $model->serviceDDoS = $map['ServiceDDoS'];
        }

        return $model;
    }
}
