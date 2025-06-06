<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace WPMailSMTP\Vendor\Google\Service\Gmail;

class CseIdentity extends \WPMailSMTP\Vendor\Google\Model
{
    /**
     * @var string
     */
    public $emailAddress;
    /**
     * @var string
     */
    public $primaryKeyPairId;
    protected $signAndEncryptKeyPairsType = \WPMailSMTP\Vendor\Google\Service\Gmail\SignAndEncryptKeyPairs::class;
    protected $signAndEncryptKeyPairsDataType = '';
    /**
     * @param string
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * @param string
     */
    public function setPrimaryKeyPairId($primaryKeyPairId)
    {
        $this->primaryKeyPairId = $primaryKeyPairId;
    }
    /**
     * @return string
     */
    public function getPrimaryKeyPairId()
    {
        return $this->primaryKeyPairId;
    }
    /**
     * @param SignAndEncryptKeyPairs
     */
    public function setSignAndEncryptKeyPairs(\WPMailSMTP\Vendor\Google\Service\Gmail\SignAndEncryptKeyPairs $signAndEncryptKeyPairs)
    {
        $this->signAndEncryptKeyPairs = $signAndEncryptKeyPairs;
    }
    /**
     * @return SignAndEncryptKeyPairs
     */
    public function getSignAndEncryptKeyPairs()
    {
        return $this->signAndEncryptKeyPairs;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\WPMailSMTP\Vendor\Google\Service\Gmail\CseIdentity::class, 'WPMailSMTP\\Vendor\\Google_Service_Gmail_CseIdentity');
