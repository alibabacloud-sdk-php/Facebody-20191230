<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs\results;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs\results\bodies\positions;
use AlibabaCloud\Tea\Model;

class bodies extends Model
{
    /**
     * @example 0.91309475898742676
     *
     * @var float
     */
    public $confident;

    /**
     * @example nose
     *
     * @var string
     */
    public $label;

    /**
     * @var positions[]
     */
    public $positions;
    protected $_name = [
        'confident' => 'Confident',
        'label'     => 'Label',
        'positions' => 'Positions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confident) {
            $res['Confident'] = $this->confident;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->positions) {
            $res['Positions'] = [];
            if (null !== $this->positions && \is_array($this->positions)) {
                $n = 0;
                foreach ($this->positions as $item) {
                    $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confident'])) {
            $model->confident = $map['Confident'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Positions'])) {
            if (!empty($map['Positions'])) {
                $model->positions = [];
                $n                = 0;
                foreach ($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
