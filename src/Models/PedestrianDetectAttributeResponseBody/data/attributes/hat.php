<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes;

use AlibabaCloud\Tea\Model;

class hat extends Model
{
    /**
     * @example No
     *
     * @var string
     */
    public $name;

    /**
     * @example 0.98272394016385078
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'name'  => 'Name',
        'score' => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
