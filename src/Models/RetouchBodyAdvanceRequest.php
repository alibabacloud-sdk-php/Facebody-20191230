<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RetouchBodyAdvanceRequest extends Model
{
    /**
     * @example https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/photo-1562956335-14faa1a9aeeb.jpeg
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $lengthenDegree;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $slimDegree;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'lengthenDegree' => 'LengthenDegree',
        'slimDegree'     => 'SlimDegree',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }
        if (null !== $this->slimDegree) {
            $res['SlimDegree'] = $this->slimDegree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetouchBodyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }
        if (isset($map['SlimDegree'])) {
            $model->slimDegree = $map['SlimDegree'];
        }

        return $model;
    }
}
