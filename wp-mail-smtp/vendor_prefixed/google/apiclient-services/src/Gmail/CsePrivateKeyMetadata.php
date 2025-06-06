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

class CsePrivateKeyMetadata extends \WPMailSMTP\Vendor\Google\Model
{
    protected $hardwareKeyMetadataType = \WPMailSMTP\Vendor\Google\Service\Gmail\HardwareKeyMetadata::class;
    protected $hardwareKeyMetadataDataType = '';
    protected $kaclsKeyMetadataType = \WPMailSMTP\Vendor\Google\Service\Gmail\KaclsKeyMetadata::class;
    protected $kaclsKeyMetadataDataType = '';
    /**
     * @var string
     */
    public $privateKeyMetadataId;
    /**
     * @param HardwareKeyMetadata
     */
    public function setHardwareKeyMetadata(\WPMailSMTP\Vendor\Google\Service\Gmail\HardwareKeyMetadata $hardwareKeyMetadata)
    {
        $this->hardwareKeyMetadata = $hardwareKeyMetadata;
    }
    /**
     * @return HardwareKeyMetadata
     */
    public function getHardwareKeyMetadata()
    {
        return $this->hardwareKeyMetadata;
    }
    /**
     * @param KaclsKeyMetadata
     */
    public function setKaclsKeyMetadata(\WPMailSMTP\Vendor\Google\Service\Gmail\KaclsKeyMetadata $kaclsKeyMetadata)
    {
        $this->kaclsKeyMetadata = $kaclsKeyMetadata;
    }
    /**
     * @return KaclsKeyMetadata
     */
    public function getKaclsKeyMetadata()
    {
        return $this->kaclsKeyMetadata;
    }
    /**
     * @param string
     */
    public function setPrivateKeyMetadataId($privateKeyMetadataId)
    {
        $this->privateKeyMetadataId = $privateKeyMetadataId;
    }
    /**
     * @return string
     */
    public function getPrivateKeyMetadataId()
    {
        return $this->privateKeyMetadataId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\WPMailSMTP\Vendor\Google\Service\Gmail\CsePrivateKeyMetadata::class, 'WPMailSMTP\\Vendor\\Google_Service_Gmail_CsePrivateKeyMetadata');
