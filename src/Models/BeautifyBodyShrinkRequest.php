<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class BeautifyBodyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ageRangeShrink;

    /**
     * @var string
     */
    public $bodyBoxesShrink;

    /**
     * @var int
     */
    public $custom;

    /**
     * @var string
     */
    public $faceListShrink;

    /**
     * @var float
     */
    public $femaleLiquifyDegree;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var bool
     */
    public $isPregnant;

    /**
     * @var float
     */
    public $lengthenDegree;

    /**
     * @var float
     */
    public $maleLiquifyDegree;

    /**
     * @var int
     */
    public $originalHeight;

    /**
     * @var int
     */
    public $originalWidth;

    /**
     * @var string
     */
    public $poseListShrink;
    protected $_name = [
        'ageRangeShrink'      => 'AgeRange',
        'bodyBoxesShrink'     => 'BodyBoxes',
        'custom'              => 'Custom',
        'faceListShrink'      => 'FaceList',
        'femaleLiquifyDegree' => 'FemaleLiquifyDegree',
        'imageURL'            => 'ImageURL',
        'isPregnant'          => 'IsPregnant',
        'lengthenDegree'      => 'LengthenDegree',
        'maleLiquifyDegree'   => 'MaleLiquifyDegree',
        'originalHeight'      => 'OriginalHeight',
        'originalWidth'       => 'OriginalWidth',
        'poseListShrink'      => 'PoseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ageRangeShrink) {
            $res['AgeRange'] = $this->ageRangeShrink;
        }
        if (null !== $this->bodyBoxesShrink) {
            $res['BodyBoxes'] = $this->bodyBoxesShrink;
        }
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }
        if (null !== $this->faceListShrink) {
            $res['FaceList'] = $this->faceListShrink;
        }
        if (null !== $this->femaleLiquifyDegree) {
            $res['FemaleLiquifyDegree'] = $this->femaleLiquifyDegree;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->isPregnant) {
            $res['IsPregnant'] = $this->isPregnant;
        }
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }
        if (null !== $this->maleLiquifyDegree) {
            $res['MaleLiquifyDegree'] = $this->maleLiquifyDegree;
        }
        if (null !== $this->originalHeight) {
            $res['OriginalHeight'] = $this->originalHeight;
        }
        if (null !== $this->originalWidth) {
            $res['OriginalWidth'] = $this->originalWidth;
        }
        if (null !== $this->poseListShrink) {
            $res['PoseList'] = $this->poseListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeautifyBodyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgeRange'])) {
            $model->ageRangeShrink = $map['AgeRange'];
        }
        if (isset($map['BodyBoxes'])) {
            $model->bodyBoxesShrink = $map['BodyBoxes'];
        }
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }
        if (isset($map['FaceList'])) {
            $model->faceListShrink = $map['FaceList'];
        }
        if (isset($map['FemaleLiquifyDegree'])) {
            $model->femaleLiquifyDegree = $map['FemaleLiquifyDegree'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['IsPregnant'])) {
            $model->isPregnant = $map['IsPregnant'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }
        if (isset($map['MaleLiquifyDegree'])) {
            $model->maleLiquifyDegree = $map['MaleLiquifyDegree'];
        }
        if (isset($map['OriginalHeight'])) {
            $model->originalHeight = $map['OriginalHeight'];
        }
        if (isset($map['OriginalWidth'])) {
            $model->originalWidth = $map['OriginalWidth'];
        }
        if (isset($map['PoseList'])) {
            $model->poseListShrink = $map['PoseList'];
        }

        return $model;
    }
}
