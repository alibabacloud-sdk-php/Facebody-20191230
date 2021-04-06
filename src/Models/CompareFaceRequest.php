<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CompareFaceRequest extends Model
{
    /**
     * @description 质量分阈值，取值范围 [0.0, 100.0],   0.0或空  表示不做质量分判断逻辑。
     *
     * @var float
     */
    public $qualityScoreThreshold;

    /**
     * @var string
     */
    public $imageURLA;

    /**
     * @var string
     */
    public $imageURLB;

    /**
     * @var int[]
     */
    public $imageDataA;

    /**
     * @var int[]
     */
    public $imageDataB;
    protected $_name = [
        'qualityScoreThreshold' => 'QualityScoreThreshold',
        'imageURLA'             => 'ImageURLA',
        'imageURLB'             => 'ImageURLB',
        'imageDataA'            => 'ImageDataA',
        'imageDataB'            => 'ImageDataB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }
        if (null !== $this->imageURLA) {
            $res['ImageURLA'] = $this->imageURLA;
        }
        if (null !== $this->imageURLB) {
            $res['ImageURLB'] = $this->imageURLB;
        }
        if (null !== $this->imageDataA) {
            $res['ImageDataA'] = $this->imageDataA;
        }
        if (null !== $this->imageDataB) {
            $res['ImageDataB'] = $this->imageDataB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }
        if (isset($map['ImageURLA'])) {
            $model->imageURLA = $map['ImageURLA'];
        }
        if (isset($map['ImageURLB'])) {
            $model->imageURLB = $map['ImageURLB'];
        }
        if (isset($map['ImageDataA'])) {
            $model->imageDataA = $map['ImageDataA'];
        }
        if (isset($map['ImageDataB'])) {
            $model->imageDataB = $map['ImageDataB'];
        }

        return $model;
    }
}
