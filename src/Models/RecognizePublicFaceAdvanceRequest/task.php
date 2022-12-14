<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class task extends Model
{
    /**
     * @example 9j/4AAQSkZJRgABAQAAAQABAAD/2****
     *
     * @var string
     */
    public $imageData;

    /**
     * @example https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg
     *
     * @var Stream
     */
    public $imageURLObject;
    protected $_name = [
        'imageData'      => 'ImageData',
        'imageURLObject' => 'ImageURL',
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
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageData'])) {
            $model->imageData = $map['ImageData'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        return $model;
    }
}
