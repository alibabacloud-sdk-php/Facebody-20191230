<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RetouchSkinAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RetouchSkin/RetouchSkin3.png
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $retouchDegree;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $whiteningDegree;
    protected $_name = [
        'imageURLObject'  => 'ImageURL',
        'retouchDegree'   => 'RetouchDegree',
        'whiteningDegree' => 'WhiteningDegree',
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
        if (null !== $this->retouchDegree) {
            $res['RetouchDegree'] = $this->retouchDegree;
        }
        if (null !== $this->whiteningDegree) {
            $res['WhiteningDegree'] = $this->whiteningDegree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetouchSkinAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['RetouchDegree'])) {
            $model->retouchDegree = $map['RetouchDegree'];
        }
        if (isset($map['WhiteningDegree'])) {
            $model->whiteningDegree = $map['WhiteningDegree'];
        }

        return $model;
    }
}
