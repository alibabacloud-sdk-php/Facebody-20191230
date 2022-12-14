<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\CountCrowdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-aic-iv-cn-shanghai.oss-cn-shanghai.aliyuncs.com/crowd-counting%2F54ef06866834412984754eec9e84b3****
     *
     * @var string
     */
    public $hotMap;

    /**
     * @example 460
     *
     * @var int
     */
    public $peopleNumber;
    protected $_name = [
        'hotMap'       => 'HotMap',
        'peopleNumber' => 'PeopleNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotMap) {
            $res['HotMap'] = $this->hotMap;
        }
        if (null !== $this->peopleNumber) {
            $res['PeopleNumber'] = $this->peopleNumber;
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
        if (isset($map['HotMap'])) {
            $model->hotMap = $map['HotMap'];
        }
        if (isset($map['PeopleNumber'])) {
            $model->peopleNumber = $map['PeopleNumber'];
        }

        return $model;
    }
}
