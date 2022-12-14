<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeHandGestureRequest extends Model
{
    /**
     * @example gesture_app
     *
     * @var string
     */
    public $appId;

    /**
     * @example gesture_recognition
     *
     * @var string
     */
    public $gestureType;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/cc/RecognizeHandGesture1.jpg
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'appId'       => 'AppId',
        'gestureType' => 'GestureType',
        'imageURL'    => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->gestureType) {
            $res['GestureType'] = $this->gestureType;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeHandGestureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GestureType'])) {
            $model->gestureType = $map['GestureType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
