<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GetRealPersonVerificationResultRequest extends Model
{
    /**
     * @var string
     */
    public $materialHash;

    /**
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'materialHash'      => 'MaterialHash',
        'verificationToken' => 'VerificationToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialHash) {
            $res['MaterialHash'] = $this->materialHash;
        }
        if (null !== $this->verificationToken) {
            $res['VerificationToken'] = $this->verificationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealPersonVerificationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialHash'])) {
            $model->materialHash = $map['MaterialHash'];
        }
        if (isset($map['VerificationToken'])) {
            $model->verificationToken = $map['VerificationToken'];
        }

        return $model;
    }
}
