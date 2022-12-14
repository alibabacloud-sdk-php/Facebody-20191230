<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data;

use AlibabaCloud\Tea\Model;

class insertedFaces extends Model
{
    /**
     * @example 16350536
     *
     * @var string
     */
    public $faceId;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example 99.79581
     *
     * @var float
     */
    public $qualitieScore;
    protected $_name = [
        'faceId'        => 'FaceId',
        'imageURL'      => 'ImageURL',
        'qualitieScore' => 'QualitieScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->qualitieScore) {
            $res['QualitieScore'] = $this->qualitieScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertedFaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['QualitieScore'])) {
            $model->qualitieScore = $map['QualitieScore'];
        }

        return $model;
    }
}
