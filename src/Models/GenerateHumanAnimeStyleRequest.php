<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GenerateHumanAnimeStyleRequest extends Model
{
    /**
     * @var string
     */
    public $algoType;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'algoType' => 'AlgoType',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoType) {
            $res['AlgoType'] = $this->algoType;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateHumanAnimeStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoType'])) {
            $model->algoType = $map['AlgoType'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
