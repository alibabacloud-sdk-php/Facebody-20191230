<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion;
use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var detectRegion[]
     */
    public $detectRegion;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'imageURL'     => 'ImageURL',
        'detectRegion' => 'DetectRegion',
        'regionType'   => 'RegionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->detectRegion) {
            $res['DetectRegion'] = [];
            if (null !== $this->detectRegion && \is_array($this->detectRegion)) {
                $n = 0;
                foreach ($this->detectRegion as $item) {
                    $res['DetectRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectPedestrianIntrusionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['DetectRegion'])) {
            if (!empty($map['DetectRegion'])) {
                $model->detectRegion = [];
                $n                   = 0;
                foreach ($map['DetectRegion'] as $item) {
                    $model->detectRegion[$n++] = null !== $item ? detectRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
