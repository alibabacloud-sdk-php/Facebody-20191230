<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponseBody\data\faceInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var faceInfos[]
     */
    public $faceInfos;

    /**
     * @example 6cd509ea-54fa-4730-8e9d-c94cadcda048
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'faceInfos'  => 'FaceInfos',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceInfos) {
            $res['FaceInfos'] = [];
            if (null !== $this->faceInfos && \is_array($this->faceInfos)) {
                $n = 0;
                foreach ($this->faceInfos as $item) {
                    $res['FaceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['FaceInfos'])) {
            if (!empty($map['FaceInfos'])) {
                $model->faceInfos = [];
                $n                = 0;
                foreach ($map['FaceInfos'] as $item) {
                    $model->faceInfos[$n++] = null !== $item ? faceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
