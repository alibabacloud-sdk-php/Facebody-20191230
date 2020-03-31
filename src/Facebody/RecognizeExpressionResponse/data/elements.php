<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $expression;
    public $faceProbability;
    public $faceRectangle;
    protected $_required = [
        'expression'      => true,
        'faceProbability' => true,
        'faceRectangle'   => true,
    ];
    protected $_name = [
        'expression'      => 'Expression',
        'faceProbability' => 'FaceProbability',
        'faceRectangle'   => 'FaceRectangle',
    ];
    protected $_description = [
        'expression'      => 'expression',
        'faceProbability' => 'faceProbability',
        'faceRectangle'   => 'faceRectangle',
    ];
}
