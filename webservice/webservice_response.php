<?php
/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use $this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Class to get and set webservice response.
 */
class WebserviceResponse {

  /**
   * @var String message of webservice response.
   */
  public $message;

  /**
   * @var String result of webservice response.
   */
  public $result;

  /**
   * Initialize webservice message and result.
   */
  public function __construct($message, $result) {
    $this->setMessage($message);
    $this->setResult($result);
  }

  /**
   * @return String webservice response message.
   */
  public function getMessage() {
    return $this->message;
  }

  /**
   * @param String message set webservice response message.
   */
  public function setMessage($message) {
    $this->message = $message;
  }

  /**
   * @return String webservice response result.
   */
  public function getResult() {
    return $this->result;
  }

  /**
   * @param String webservice response result, possible values are approved or
   * declined .
   */
  public function setResult($result) {
    $this->result = $result;
  }
}
