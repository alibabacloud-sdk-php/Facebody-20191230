<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianResponseBody\data\elements;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @example 599
     *
     * @var int
     */
    public $height;

    /**
     * @example 899
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'elements' => 'Elements',
        'height'   => 'Height',
        'width'    => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
