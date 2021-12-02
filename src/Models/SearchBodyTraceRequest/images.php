<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceRequest;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description 图片Base64数据
     *
     * @var int[]
     */
    public $imageData;

    /**
     * @description Trace图片URL
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'imageData' => 'ImageData',
        'imageURL'  => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageData) {
            $res['ImageData'] = $this->imageData;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
