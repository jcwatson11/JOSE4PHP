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

namespace jwk\impl;

use jwa\JSONWebSignatureAndEncryptionAlgorithms;
use jwk\IJWKSpecification;
use jwk\JSONWebKeyPublicKeyUseValues;

/**
 * Class RSAJWKSpecification
 * @package jwk\impl
 */
final class RSAJWKKeyLengthSpecification
    extends AbstractJWKSpecification
    implements IJWKSpecification {

    /**
     * @var int
     */
    private $len;

    /**
     * @param int $len
     * @param string $alg
     * @param string $use
     */
    public function __construct($len = 2048, $alg = JSONWebSignatureAndEncryptionAlgorithms::RS256, $use = JSONWebKeyPublicKeyUseValues::Signature){
        parent::__construct($alg, $use);
        $this->len = $len;
    }

    /**
     * @return int
     */
    public function getKeyLenInBits(){
       return  $this->len;
    }
}