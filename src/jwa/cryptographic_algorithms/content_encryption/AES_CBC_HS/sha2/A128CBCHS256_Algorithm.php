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

namespace jwa\cryptographic_algorithms\content_encryption\AES_CBC_HS\sha2;

use jwa\cryptographic_algorithms\content_encryption\AES_CBC_HS\AES_CBC_HMAC_SHA2_Algorithm;
use jwa\JSONWebSignatureAndEncryptionAlgorithms;

final class A128CBCHS256_Algorithm extends AES_CBC_HMAC_SHA2_Algorithm {

    /**
     * @return string
     */
    public function getHashingAlgorithm()
    {
        return 'sha256';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return JSONWebSignatureAndEncryptionAlgorithms::A128CBC_HS256;
    }

    /**
     * @return int
     */
    public function getMinKeyLen()
    {
        return 256;
    }

    /**
     * hash key size in bits
     * @return int
     */
    public function getHashKeyLen()
    {
       return $this->getMinKeyLen();
    }
}