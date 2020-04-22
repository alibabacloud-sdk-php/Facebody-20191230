<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse\data;

use AlibabaCloud\Tea\Model;

class metaObject extends Model
{
    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description width
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'width'  => 'Width',
    ];

    public function validate()
    {
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Height'] = $this->height;
        $res['Width']  = $this->width;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
