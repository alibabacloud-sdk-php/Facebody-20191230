<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponseBody\data\elements;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @var int[]
     */
    public $box;
    protected $_name = [
        'box' => 'Box',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = $this->box;
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
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
            }
        }

        return $model;
    }
}
