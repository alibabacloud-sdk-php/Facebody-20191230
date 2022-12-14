<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands\keyPoints\positions;
use AlibabaCloud\Tea\Model;

class keyPoints extends Model
{
    /**
     * @example thumb
     *
     * @var string
     */
    public $label;

    /**
     * @var positions[]
     */
    public $positions;
    protected $_name = [
        'label'     => 'Label',
        'positions' => 'Positions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return keyPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
