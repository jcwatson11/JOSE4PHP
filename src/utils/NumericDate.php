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

namespace utils;

/**
 * Class NumericDate
 * @package utils
 * A JSON numeric value representing the number of seconds from
 * 1970-01-01T00:00:00Z UTC until the specified UTC date/time,
 * ignoring leap seconds.  This is equivalent to the IEEE Std 1003.1,
 * 2013 Edition [POSIX.1] definition "Seconds Since the Epoch", in
 * which each day is accounted for by exactly 86400 seconds, other
 * than that non-integer values can be represented.  See RFC 3339
 * [RFC3339] for details regarding date/times in general and UTC in
 * particular.
 */
class NumericDate extends JsonValue {

    /**
     * @return int
     */
    public function getEpoch(){
        return (int)$this->value;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(){
        return new \DateTime("@$this->value");
    }
}