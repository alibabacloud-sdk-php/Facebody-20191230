<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @example 584
     *
     * @var float
     */
    public $bottomRightX;

    /**
     * @example 218
     *
     * @var float
     */
    public $bottomRightY;

    /**
     * @example 0.88381063938140869
     *
     * @var float
     */
    public $score;

    /**
     * @example 36
     *
     * @var float
     */
    public $topLeftX;

    /**
     * @example 27
     *
     * @var float
     */
    public $topLeftY;
    protected $_name = [
        'bottomRightX' => 'BottomRightX',
        'bottomRightY' => 'BottomRightY',
        'score'        => 'Score',
        'topLeftX'     => 'TopLeftX',
        'topLeftY'     => 'TopLeftY',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bottomRightX) {
            $res['BottomRightX'] = $this->bottomRightX;
        }
        if (null !== $this->bottomRightY) {
            $res['BottomRightY'] = $this->bottomRightY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->topLeftX) {
            $res['TopLeftX'] = $this->topLeftX;
        }
        if (null !== $this->topLeftY) {
            $res['TopLeftY'] = $this->topLeftY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return boxes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BottomRightX'])) {
            $model->bottomRightX = $map['BottomRightX'];
        }
        if (isset($map['BottomRightY'])) {
            $model->bottomRightY = $map['BottomRightY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TopLeftX'])) {
            $model->topLeftX = $map['TopLeftX'];
        }
        if (isset($map['TopLeftY'])) {
            $model->topLeftY = $map['TopLeftY'];
        }

        return $model;
    }
}
