<?php
/**
 * Copyright 2015 OpenStack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/

namespace jwa\cryptographic_algorithms\key_management\rsa\OAEP;

use jwa\cryptographic_algorithms\key_management\rsa\RSA_KeyManagementAlgorithm;
use jwa\JSONWebSignatureAndEncryptionAlgorithms;

/**
 * Class RSA_OAEP_KeyManagementAlgorithm
 * @package jwa\cryptographic_algorithms\key_management\rsa\OAEP
 */
final class RSA_OAEP_KeyManagementAlgorithm extends RSA_KeyManagementAlgorithm {

    /**
     * @return string
     */
    public function getHashingAlgorithm()
    {
        return 'sha1';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return JSONWebSignatureAndEncryptionAlgorithms::RSA_OAEP;
    }

    /**
     * @return int
     */
    public function getEncryptionMode()
    {
        return CRYPT_RSA_ENCRYPTION_OAEP;
    }

    /**
     * @return string
     */
    public function getMGFHash()
    {
        return $this->getHashingAlgorithm();
    }

    /**
     * hash key size in bits
     * @return int
     */
    public function getHashKeyLen()
    {
        return 1;
    }
}