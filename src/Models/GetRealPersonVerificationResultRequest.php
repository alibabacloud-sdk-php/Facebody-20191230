<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class GetRealPersonVerificationResultRequest extends Model
{
    /**
     * @example cwek23dw24geor89230hf2rw
     *
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'verificationToken' => 'VerificationToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['VerificationToken'])) {
            $model->verificationToken = $map['VerificationToken'];
        }

        return $model;
    }
}
