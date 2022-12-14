<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class AddFaceRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example U1
     *
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/1.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 50.0
     *
     * @var float
     */
    public $qualityScoreThreshold;

    /**
     * @example 50.0
     *
     * @var float
     */
    public $similarityScoreThresholdBetweenEntity;

    /**
     * @example 50.0
     *
     * @var float
     */
    public $similarityScoreThresholdInEntity;
    protected $_name = [
        'dbName'                                => 'DbName',
        'entityId'                              => 'EntityId',
        'extraData'                             => 'ExtraData',
        'imageUrl'                              => 'ImageUrl',
        'qualityScoreThreshold'                 => 'QualityScoreThreshold',
        'similarityScoreThresholdBetweenEntity' => 'SimilarityScoreThresholdBetweenEntity',
        'similarityScoreThresholdInEntity'      => 'SimilarityScoreThresholdInEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }
        if (null !== $this->similarityScoreThresholdBetweenEntity) {
            $res['SimilarityScoreThresholdBetweenEntity'] = $this->similarityScoreThresholdBetweenEntity;
        }
        if (null !== $this->similarityScoreThresholdInEntity) {
            $res['SimilarityScoreThresholdInEntity'] = $this->similarityScoreThresholdInEntity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }
        if (isset($map['SimilarityScoreThresholdBetweenEntity'])) {
            $model->similarityScoreThresholdBetweenEntity = $map['SimilarityScoreThresholdBetweenEntity'];
        }
        if (isset($map['SimilarityScoreThresholdInEntity'])) {
            $model->similarityScoreThresholdInEntity = $map['SimilarityScoreThresholdInEntity'];
        }

        return $model;
    }
}
