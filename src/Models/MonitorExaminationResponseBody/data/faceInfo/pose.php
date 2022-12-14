<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\faceInfo;

use AlibabaCloud\Tea\Model;

class pose extends Model
{
    /**
     * @example -0.9185499548912048
     *
     * @var float
     */
    public $pitch;

    /**
     * @example -0.18541647493839264
     *
     * @var float
     */
    public $roll;

    /**
     * @example 8.095342636108398
     *
     * @var float
     */
    public $yaw;
    protected $_name = [
        'pitch' => 'Pitch',
        'roll'  => 'Roll',
        'yaw'   => 'Yaw',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pitch) {
            $res['Pitch'] = $this->pitch;
        }
        if (null !== $this->roll) {
            $res['Roll'] = $this->roll;
        }
        if (null !== $this->yaw) {
            $res['Yaw'] = $this->yaw;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pose
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pitch'])) {
            $model->pitch = $map['Pitch'];
        }
        if (isset($map['Roll'])) {
            $model->roll = $map['Roll'];
        }
        if (isset($map['Yaw'])) {
            $model->yaw = $map['Yaw'];
        }

        return $model;
    }
}
