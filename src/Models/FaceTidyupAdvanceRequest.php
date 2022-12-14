<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class FaceTidyupAdvanceRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceTidyup/FaceTidyup5.png
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @example 0
     *
     * @var int
     */
    public $shapeType;

    /**
     * @example 1
     *
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'shapeType'      => 'ShapeType',
        'strength'       => 'Strength',
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
        if (null !== $this->shapeType) {
            $res['ShapeType'] = $this->shapeType;
        }
        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceTidyupAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['ShapeType'])) {
            $model->shapeType = $map['ShapeType'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        return $model;
    }
}
