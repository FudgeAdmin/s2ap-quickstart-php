<?php
/*
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


  /**
   * The "boardingpassclass" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $boardingpassclass = $walletobjectsService->boardingpassclass;
   *  </code>
   */
  class Google_BoardingpassclassServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the boarding pass class referenced by the given class ID.
     * (boardingpassclass.addmessage)
     *
     * @param string $resourceId
     * @param Google_BoardingPassClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_BoardingPassClassAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClassAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the boarding pass class with the given class ID.
     * (boardingpassclass.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool approvedOnly
     * @opt_param string version
     * @return Google_BoardingPassClass
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a boarding pass class with the given ID and properties.
     * (boardingpassclass.insert)
     *
     * @param Google_BoardingPassClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassClass
     */
    public function insert(Google_BoardingPassClass $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all boarding pass classes for a given issuer ID.
     * (boardingpassclass.list)
     *
     * @param string $issuerId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_BoardingPassClassListResponse
     */
    public function listBoardingpassclass($issuerId, $optParams = array()) {
      $params = array('issuerId' => $issuerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClassListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the boarding pass class referenced by the given class ID. This method
     * supports patch semantics. (boardingpassclass.patch)
     *
     * @param string $resourceId
     * @param Google_BoardingPassClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassClass
     */
    public function patch($resourceId, Google_BoardingPassClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the boarding pass class referenced by the given class ID.
     * (boardingpassclass.update)
     *
     * @param string $resourceId
     * @param Google_BoardingPassClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassClass
     */
    public function update($resourceId, Google_BoardingPassClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassClass($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "boardingpassobject" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $boardingpassobject = $walletobjectsService->boardingpassobject;
   *  </code>
   */
  class Google_BoardingpassobjectServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the boarding pass object referenced by the given object ID.
     * (boardingpassobject.addmessage)
     *
     * @param string $resourceId
     * @param Google_BoardingPassObjectAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_BoardingPassObjectAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObjectAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the boarding pass object with the given object ID.
     * (boardingpassobject.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassObject
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a boarding pass object with the given ID and properties.
     * (boardingpassobject.insert)
     *
     * @param Google_BoardingPassObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassObject
     */
    public function insert(Google_BoardingPassObject $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all boarding pass objects for a given class ID.
     * (boardingpassobject.list)
     *
     * @param string $classId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_BoardingPassObjectListResponse
     */
    public function listBoardingpassobject($classId, $optParams = array()) {
      $params = array('classId' => $classId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObjectListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the boarding pass object referenced by the given object ID. This
     * method supports patch semantics. (boardingpassobject.patch)
     *
     * @param string $resourceId
     * @param Google_BoardingPassObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassObject
     */
    public function patch($resourceId, Google_BoardingPassObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the boarding pass object referenced by the given object ID.
     * (boardingpassobject.update)
     *
     * @param string $resourceId
     * @param Google_BoardingPassObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BoardingPassObject
     */
    public function update($resourceId, Google_BoardingPassObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_BoardingPassObject($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "genericclass" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $genericclass = $walletobjectsService->genericclass;
   *  </code>
   */
  class Google_GenericclassServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the generic class referenced by the given class ID.
     * (genericclass.addmessage)
     *
     * @param string $resourceId
     * @param Google_GenericClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_GenericClassAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClassAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the generic class with the given class ID. (genericclass.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool approvedOnly
     * @opt_param string version
     * @return Google_GenericClass
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a generic class with the given ID and properties.
     * (genericclass.insert)
     *
     * @param Google_GenericClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericClass
     */
    public function insert(Google_GenericClass $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all generic classes for a given issuer ID.
     * (genericclass.list)
     *
     * @param string $issuerId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_GenericClassListResponse
     */
    public function listGenericclass($issuerId, $optParams = array()) {
      $params = array('issuerId' => $issuerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClassListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the generic class referenced by the given class ID. This method
     * supports patch semantics. (genericclass.patch)
     *
     * @param string $resourceId
     * @param Google_GenericClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericClass
     */
    public function patch($resourceId, Google_GenericClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the generic class referenced by the given class ID.
     * (genericclass.update)
     *
     * @param string $resourceId
     * @param Google_GenericClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericClass
     */
    public function update($resourceId, Google_GenericClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_GenericClass($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "genericobject" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $genericobject = $walletobjectsService->genericobject;
   *  </code>
   */
  class Google_GenericobjectServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the generic object referenced by the given object ID.
     * (genericobject.addmessage)
     *
     * @param string $resourceId
     * @param Google_GenericObjectAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_GenericObjectAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObjectAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the generic object with the given object ID. (genericobject.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     * @return Google_GenericObject
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a generic object with the given ID and properties.
     * (genericobject.insert)
     *
     * @param Google_GenericObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericObject
     */
    public function insert(Google_GenericObject $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all generic objects for a given class ID.
     * (genericobject.list)
     *
     * @param string $classId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_GenericObjectListResponse
     */
    public function listGenericobject($classId, $optParams = array()) {
      $params = array('classId' => $classId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObjectListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the generic object referenced by the given object ID. This method
     * supports patch semantics. (genericobject.patch)
     *
     * @param string $resourceId
     * @param Google_GenericObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericObject
     */
    public function patch($resourceId, Google_GenericObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the generic object referenced by the given object ID.
     * (genericobject.update)
     *
     * @param string $resourceId
     * @param Google_GenericObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GenericObject
     */
    public function update($resourceId, Google_GenericObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_GenericObject($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "giftcardclass" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $giftcardclass = $walletobjectsService->giftcardclass;
   *  </code>
   */
  class Google_GiftcardclassServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the gift card class referenced by the given class ID.
     * (giftcardclass.addmessage)
     *
     * @param string $resourceId
     * @param Google_GiftCardClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_GiftCardClassAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClassAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the gift card class with the given class ID. (giftcardclass.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool approvedOnly
     * @opt_param string version
     * @return Google_GiftCardClass
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a gift card class with the given ID and properties.
     * (giftcardclass.insert)
     *
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardClass
     */
    public function insert(Google_GiftCardClass $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all gift card classes for a given issuer ID.
     * (giftcardclass.list)
     *
     * @param string $issuerId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_GiftCardClassListResponse
     */
    public function listGiftcardclass($issuerId, $optParams = array()) {
      $params = array('issuerId' => $issuerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClassListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the gift card class referenced by the given class ID. This method
     * supports patch semantics. (giftcardclass.patch)
     *
     * @param string $resourceId
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardClass
     */
    public function patch($resourceId, Google_GiftCardClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the gift card class referenced by the given class ID.
     * (giftcardclass.update)
     *
     * @param string $resourceId
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardClass
     */
    public function update($resourceId, Google_GiftCardClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardClass($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "giftcardobject" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $giftcardobject = $walletobjectsService->giftcardobject;
   *  </code>
   */
  class Google_GiftcardobjectServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the gift card object referenced by the given object ID.
     * (giftcardobject.addmessage)
     *
     * @param string $resourceId
     * @param Google_GiftCardObjectAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_GiftCardObjectAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObjectAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the gift card object with the given object ID. (giftcardobject.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardObject
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a gift card object with the given ID and properties.
     * (giftcardobject.insert)
     *
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardObject
     */
    public function insert(Google_GiftCardObject $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all gift card objects for a given class ID.
     * (giftcardobject.list)
     *
     * @param string $classId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_GiftCardObjectListResponse
     */
    public function listGiftcardobject($classId, $optParams = array()) {
      $params = array('classId' => $classId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObjectListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the gift card object referenced by the given object ID. This method
     * supports patch semantics. (giftcardobject.patch)
     *
     * @param string $resourceId
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardObject
     */
    public function patch($resourceId, Google_GiftCardObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the gift card object referenced by the given object ID.
     * (giftcardobject.update)
     *
     * @param string $resourceId
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_GiftCardObject
     */
    public function update($resourceId, Google_GiftCardObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_GiftCardObject($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "loyaltyclass" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $loyaltyclass = $walletobjectsService->loyaltyclass;
   *  </code>
   */
  class Google_LoyaltyclassServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the loyalty class referenced by the given class ID.
     * (loyaltyclass.addmessage)
     *
     * @param string $resourceId
     * @param Google_LoyaltyClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_LoyaltyClassAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClassAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the loyalty class with the given class ID. (loyaltyclass.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool approvedOnly
     * @opt_param string version
     * @return Google_LoyaltyClass
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a loyalty class with the given ID and properties.
     * (loyaltyclass.insert)
     *
     * @param Google_LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyClass
     */
    public function insert(Google_LoyaltyClass $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all loyalty classes for a given issuer ID.
     * (loyaltyclass.list)
     *
     * @param string $issuerId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_LoyaltyClassListResponse
     */
    public function listLoyaltyclass($issuerId, $optParams = array()) {
      $params = array('issuerId' => $issuerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClassListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the loyalty class referenced by the given class ID. This method
     * supports patch semantics. (loyaltyclass.patch)
     *
     * @param string $resourceId
     * @param Google_LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyClass
     */
    public function patch($resourceId, Google_LoyaltyClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the loyalty class referenced by the given class ID.
     * (loyaltyclass.update)
     *
     * @param string $resourceId
     * @param Google_LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyClass
     */
    public function update($resourceId, Google_LoyaltyClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyClass($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "loyaltyobject" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $loyaltyobject = $walletobjectsService->loyaltyobject;
   *  </code>
   */
  class Google_LoyaltyobjectServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the loyalty object referenced by the given object ID.
     * (loyaltyobject.addmessage)
     *
     * @param string $resourceId
     * @param Google_LoyaltyObjectAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_LoyaltyObjectAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObjectAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the loyalty object with the given object ID. (loyaltyobject.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyObject
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a loyalty object with the given ID and properties.
     * (loyaltyobject.insert)
     *
     * @param Google_LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyObject
     */
    public function insert(Google_LoyaltyObject $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all loyalty objects for a given class ID.
     * (loyaltyobject.list)
     *
     * @param string $classId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_LoyaltyObjectListResponse
     */
    public function listLoyaltyobject($classId, $optParams = array()) {
      $params = array('classId' => $classId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObjectListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the loyalty object referenced by the given object ID. This method
     * supports patch semantics. (loyaltyobject.patch)
     *
     * @param string $resourceId
     * @param Google_LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyObject
     */
    public function patch($resourceId, Google_LoyaltyObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the loyalty object referenced by the given object ID.
     * (loyaltyobject.update)
     *
     * @param string $resourceId
     * @param Google_LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LoyaltyObject
     */
    public function update($resourceId, Google_LoyaltyObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_LoyaltyObject($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "offerclass" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $offerclass = $walletobjectsService->offerclass;
   *  </code>
   */
  class Google_OfferclassServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the offer class referenced by the given class ID.
     * (offerclass.addmessage)
     *
     * @param string $resourceId
     * @param Google_OfferClassAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferClassAddMessageResponse
     */
    public function addmessage($resourceId, Google_OfferClassAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClassAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the offer class with the given class ID. (offerclass.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool approvedOnly
     * @opt_param string version
     * @return Google_OfferClass
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts an offer class with the given ID and properties. (offerclass.insert)
     *
     * @param Google_OfferClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferClass
     */
    public function insert(Google_OfferClass $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all offer classes for a given issuer ID. (offerclass.list)
     *
     * @param string $issuerId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_OfferClassListResponse
     */
    public function listOfferclass($issuerId, $optParams = array()) {
      $params = array('issuerId' => $issuerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClassListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the offer class referenced by the given class ID. This method
     * supports patch semantics. (offerclass.patch)
     *
     * @param string $resourceId
     * @param Google_OfferClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferClass
     */
    public function patch($resourceId, Google_OfferClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClass($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the offer class referenced by the given class ID. (offerclass.update)
     *
     * @param string $resourceId
     * @param Google_OfferClass $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferClass
     */
    public function update($resourceId, Google_OfferClass $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_OfferClass($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "offerobject" collection of methods.
   * Typical usage is:
   *  <code>
   *   $walletobjectsService = new Google_WalletobjectsService(...);
   *   $offerobject = $walletobjectsService->offerobject;
   *  </code>
   */
  class Google_OfferobjectServiceResource extends Google_ServiceResource {

    /**
     * Adds a message to the offer object referenced by the given object ID.
     * (offerobject.addmessage)
     *
     * @param string $resourceId
     * @param Google_OfferObjectAddMessageRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferObjectAddMessageResponse
     */
    public function addmessage($resourceId, Google_OfferObjectAddMessageRequest $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addmessage', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObjectAddMessageResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the offer object with the given object ID. (offerobject.get)
     *
     * @param string $resourceId
     * @param array $optParams Optional parameters.
     * @return Google_OfferObject
     */
    public function get($resourceId, $optParams = array()) {
      $params = array('resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts an offer object with the given ID and properties.
     * (offerobject.insert)
     *
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferObject
     */
    public function insert(Google_OfferObject $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of all offer objects for a given class ID. (offerobject.list)
     *
     * @param string $classId
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults
     * @opt_param string token
     * @return Google_OfferObjectListResponse
     */
    public function listOfferobject($classId, $optParams = array()) {
      $params = array('classId' => $classId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObjectListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the offer object referenced by the given object ID. This method
     * supports patch semantics. (offerobject.patch)
     *
     * @param string $resourceId
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferObject
     */
    public function patch($resourceId, Google_OfferObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObject($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the offer object referenced by the given object ID.
     * (offerobject.update)
     *
     * @param string $resourceId
     * @param Google_OfferObject $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OfferObject
     */
    public function update($resourceId, Google_OfferObject $postBody, $optParams = array()) {
      $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_OfferObject($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Google_Walletobjects (v1).
 *
 * <p>
 * The Wallet Objects API allows you to connect your business to millions of Google users and showcase your loyalty programs, offers, boarding passes, tickets, and more.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_WalletobjectsService extends Google_Service {
  public $boardingpassclass;
  public $boardingpassobject;
  public $genericclass;
  public $genericobject;
  public $giftcardclass;
  public $giftcardobject;
  public $loyaltyclass;
  public $loyaltyobject;
  public $offerclass;
  public $offerobject;
  /**
   * Constructs the internal representation of the Walletobjects service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client) {
    $this->servicePath = 'walletobjects/v1/';
    $this->version = 'v1';
    $this->serviceName = 'walletobjects';

    $client->addService($this->serviceName, $this->version);
    $this->boardingpassclass = new Google_BoardingpassclassServiceResource($this, $this->serviceName, 'boardingpassclass', json_decode('{"methods": {"addmessage": {"id": "walletobjects.boardingpassclass.addmessage", "path": "boardingPassClass/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassClassAddMessageRequest"}, "response": {"$ref": "BoardingPassClassAddMessageResponse"}}, "get": {"id": "walletobjects.boardingpassclass.get", "path": "boardingPassClass/{resourceId}", "httpMethod": "GET", "parameters": {"approvedOnly": {"type": "boolean", "default": "false", "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}, "version": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "BoardingPassClassGetRequest"}, "response": {"$ref": "BoardingPassClass"}}, "insert": {"id": "walletobjects.boardingpassclass.insert", "path": "boardingPassClass", "httpMethod": "POST", "request": {"$ref": "BoardingPassClass"}, "response": {"$ref": "BoardingPassClass"}}, "list": {"id": "walletobjects.boardingpassclass.list", "path": "boardingPassClass", "httpMethod": "GET", "parameters": {"issuerId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "BoardingPassClassListRequest"}, "response": {"$ref": "BoardingPassClassListResponse"}}, "patch": {"id": "walletobjects.boardingpassclass.patch", "path": "boardingPassClass/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassClass"}, "response": {"$ref": "BoardingPassClass"}}, "update": {"id": "walletobjects.boardingpassclass.update", "path": "boardingPassClass/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassClass"}, "response": {"$ref": "BoardingPassClass"}}}}', true));
    $this->boardingpassobject = new Google_BoardingpassobjectServiceResource($this, $this->serviceName, 'boardingpassobject', json_decode('{"methods": {"addmessage": {"id": "walletobjects.boardingpassobject.addmessage", "path": "boardingPassObject/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassObjectAddMessageRequest"}, "response": {"$ref": "BoardingPassObjectAddMessageResponse"}}, "get": {"id": "walletobjects.boardingpassobject.get", "path": "boardingPassObject/{resourceId}", "httpMethod": "GET", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassObjectGetRequest"}, "response": {"$ref": "BoardingPassObject"}}, "insert": {"id": "walletobjects.boardingpassobject.insert", "path": "boardingPassObject", "httpMethod": "POST", "request": {"$ref": "BoardingPassObject"}, "response": {"$ref": "BoardingPassObject"}}, "list": {"id": "walletobjects.boardingpassobject.list", "path": "boardingPassObject", "httpMethod": "GET", "parameters": {"classId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "BoardingPassObjectListRequest"}, "response": {"$ref": "BoardingPassObjectListResponse"}}, "patch": {"id": "walletobjects.boardingpassobject.patch", "path": "boardingPassObject/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassObject"}, "response": {"$ref": "BoardingPassObject"}}, "update": {"id": "walletobjects.boardingpassobject.update", "path": "boardingPassObject/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BoardingPassObject"}, "response": {"$ref": "BoardingPassObject"}}}}', true));
    $this->genericclass = new Google_GenericclassServiceResource($this, $this->serviceName, 'genericclass', json_decode('{"methods": {"addmessage": {"id": "walletobjects.genericclass.addmessage", "path": "genericClass/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericClassAddMessageRequest"}, "response": {"$ref": "GenericClassAddMessageResponse"}}, "get": {"id": "walletobjects.genericclass.get", "path": "genericClass/{resourceId}", "httpMethod": "GET", "parameters": {"approvedOnly": {"type": "boolean", "default": "false", "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}, "version": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "GenericClassGetRequest"}, "response": {"$ref": "GenericClass"}}, "insert": {"id": "walletobjects.genericclass.insert", "path": "genericClass", "httpMethod": "POST", "request": {"$ref": "GenericClass"}, "response": {"$ref": "GenericClass"}}, "list": {"id": "walletobjects.genericclass.list", "path": "genericClass", "httpMethod": "GET", "parameters": {"issuerId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "GenericClassListRequest"}, "response": {"$ref": "GenericClassListResponse"}}, "patch": {"id": "walletobjects.genericclass.patch", "path": "genericClass/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericClass"}, "response": {"$ref": "GenericClass"}}, "update": {"id": "walletobjects.genericclass.update", "path": "genericClass/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericClass"}, "response": {"$ref": "GenericClass"}}}}', true));
    $this->genericobject = new Google_GenericobjectServiceResource($this, $this->serviceName, 'genericobject', json_decode('{"methods": {"addmessage": {"id": "walletobjects.genericobject.addmessage", "path": "genericObject/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericObjectAddMessageRequest"}, "response": {"$ref": "GenericObjectAddMessageResponse"}}, "get": {"id": "walletobjects.genericobject.get", "path": "genericObject/{resourceId}", "httpMethod": "GET", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericObjectGetRequest"}, "response": {"$ref": "GenericObject"}}, "insert": {"id": "walletobjects.genericobject.insert", "path": "genericObject", "httpMethod": "POST", "request": {"$ref": "GenericObject"}, "response": {"$ref": "GenericObject"}}, "list": {"id": "walletobjects.genericobject.list", "path": "genericObject", "httpMethod": "GET", "parameters": {"classId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "GenericObjectListRequest"}, "response": {"$ref": "GenericObjectListResponse"}}, "patch": {"id": "walletobjects.genericobject.patch", "path": "genericObject/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericObject"}, "response": {"$ref": "GenericObject"}}, "update": {"id": "walletobjects.genericobject.update", "path": "genericObject/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GenericObject"}, "response": {"$ref": "GenericObject"}}}}', true));
    $this->giftcardclass = new Google_GiftcardclassServiceResource($this, $this->serviceName, 'giftcardclass', json_decode('{"methods": {"addmessage": {"id": "walletobjects.giftcardclass.addmessage", "path": "giftCardClass/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardClassAddMessageRequest"}, "response": {"$ref": "GiftCardClassAddMessageResponse"}}, "get": {"id": "walletobjects.giftcardclass.get", "path": "giftCardClass/{resourceId}", "httpMethod": "GET", "parameters": {"approvedOnly": {"type": "boolean", "default": "false", "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}, "version": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "GiftCardClassGetRequest"}, "response": {"$ref": "GiftCardClass"}}, "insert": {"id": "walletobjects.giftcardclass.insert", "path": "giftCardClass", "httpMethod": "POST", "request": {"$ref": "GiftCardClass"}, "response": {"$ref": "GiftCardClass"}}, "list": {"id": "walletobjects.giftcardclass.list", "path": "giftCardClass", "httpMethod": "GET", "parameters": {"issuerId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "GiftCardClassListRequest"}, "response": {"$ref": "GiftCardClassListResponse"}}, "patch": {"id": "walletobjects.giftcardclass.patch", "path": "giftCardClass/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardClass"}, "response": {"$ref": "GiftCardClass"}}, "update": {"id": "walletobjects.giftcardclass.update", "path": "giftCardClass/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardClass"}, "response": {"$ref": "GiftCardClass"}}}}', true));
    $this->giftcardobject = new Google_GiftcardobjectServiceResource($this, $this->serviceName, 'giftcardobject', json_decode('{"methods": {"addmessage": {"id": "walletobjects.giftcardobject.addmessage", "path": "giftCardObject/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardObjectAddMessageRequest"}, "response": {"$ref": "GiftCardObjectAddMessageResponse"}}, "get": {"id": "walletobjects.giftcardobject.get", "path": "giftCardObject/{resourceId}", "httpMethod": "GET", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardObjectGetRequest"}, "response": {"$ref": "GiftCardObject"}}, "insert": {"id": "walletobjects.giftcardobject.insert", "path": "giftCardObject", "httpMethod": "POST", "request": {"$ref": "GiftCardObject"}, "response": {"$ref": "GiftCardObject"}}, "list": {"id": "walletobjects.giftcardobject.list", "path": "giftCardObject", "httpMethod": "GET", "parameters": {"classId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "GiftCardObjectListRequest"}, "response": {"$ref": "GiftCardObjectListResponse"}}, "patch": {"id": "walletobjects.giftcardobject.patch", "path": "giftCardObject/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardObject"}, "response": {"$ref": "GiftCardObject"}}, "update": {"id": "walletobjects.giftcardobject.update", "path": "giftCardObject/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "GiftCardObject"}, "response": {"$ref": "GiftCardObject"}}}}', true));
    $this->loyaltyclass = new Google_LoyaltyclassServiceResource($this, $this->serviceName, 'loyaltyclass', json_decode('{"methods": {"addmessage": {"id": "walletobjects.loyaltyclass.addmessage", "path": "loyaltyClass/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyClassAddMessageRequest"}, "response": {"$ref": "LoyaltyClassAddMessageResponse"}}, "get": {"id": "walletobjects.loyaltyclass.get", "path": "loyaltyClass/{resourceId}", "httpMethod": "GET", "parameters": {"approvedOnly": {"type": "boolean", "default": "false", "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}, "version": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "LoyaltyClassGetRequest"}, "response": {"$ref": "LoyaltyClass"}}, "insert": {"id": "walletobjects.loyaltyclass.insert", "path": "loyaltyClass", "httpMethod": "POST", "request": {"$ref": "LoyaltyClass"}, "response": {"$ref": "LoyaltyClass"}}, "list": {"id": "walletobjects.loyaltyclass.list", "path": "loyaltyClass", "httpMethod": "GET", "parameters": {"issuerId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "LoyaltyClassListRequest"}, "response": {"$ref": "LoyaltyClassListResponse"}}, "patch": {"id": "walletobjects.loyaltyclass.patch", "path": "loyaltyClass/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyClass"}, "response": {"$ref": "LoyaltyClass"}}, "update": {"id": "walletobjects.loyaltyclass.update", "path": "loyaltyClass/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyClass"}, "response": {"$ref": "LoyaltyClass"}}}}', true));
    $this->loyaltyobject = new Google_LoyaltyobjectServiceResource($this, $this->serviceName, 'loyaltyobject', json_decode('{"methods": {"addmessage": {"id": "walletobjects.loyaltyobject.addmessage", "path": "loyaltyObject/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyObjectAddMessageRequest"}, "response": {"$ref": "LoyaltyObjectAddMessageResponse"}}, "get": {"id": "walletobjects.loyaltyobject.get", "path": "loyaltyObject/{resourceId}", "httpMethod": "GET", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyObjectGetRequest"}, "response": {"$ref": "LoyaltyObject"}}, "insert": {"id": "walletobjects.loyaltyobject.insert", "path": "loyaltyObject", "httpMethod": "POST", "request": {"$ref": "LoyaltyObject"}, "response": {"$ref": "LoyaltyObject"}}, "list": {"id": "walletobjects.loyaltyobject.list", "path": "loyaltyObject", "httpMethod": "GET", "parameters": {"classId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "LoyaltyObjectListRequest"}, "response": {"$ref": "LoyaltyObjectListResponse"}}, "patch": {"id": "walletobjects.loyaltyobject.patch", "path": "loyaltyObject/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyObject"}, "response": {"$ref": "LoyaltyObject"}}, "update": {"id": "walletobjects.loyaltyobject.update", "path": "loyaltyObject/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LoyaltyObject"}, "response": {"$ref": "LoyaltyObject"}}}}', true));
    $this->offerclass = new Google_OfferclassServiceResource($this, $this->serviceName, 'offerclass', json_decode('{"methods": {"addmessage": {"id": "walletobjects.offerclass.addmessage", "path": "offerClass/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferClassAddMessageRequest"}, "response": {"$ref": "OfferClassAddMessageResponse"}}, "get": {"id": "walletobjects.offerclass.get", "path": "offerClass/{resourceId}", "httpMethod": "GET", "parameters": {"approvedOnly": {"type": "boolean", "default": "false", "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}, "version": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "OfferClassGetRequest"}, "response": {"$ref": "OfferClass"}}, "insert": {"id": "walletobjects.offerclass.insert", "path": "offerClass", "httpMethod": "POST", "request": {"$ref": "OfferClass"}, "response": {"$ref": "OfferClass"}}, "list": {"id": "walletobjects.offerclass.list", "path": "offerClass", "httpMethod": "GET", "parameters": {"issuerId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "OfferClassListRequest"}, "response": {"$ref": "OfferClassListResponse"}}, "patch": {"id": "walletobjects.offerclass.patch", "path": "offerClass/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferClass"}, "response": {"$ref": "OfferClass"}}, "update": {"id": "walletobjects.offerclass.update", "path": "offerClass/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferClass"}, "response": {"$ref": "OfferClass"}}}}', true));
    $this->offerobject = new Google_OfferobjectServiceResource($this, $this->serviceName, 'offerobject', json_decode('{"methods": {"addmessage": {"id": "walletobjects.offerobject.addmessage", "path": "offerObject/{resourceId}/addMessage", "httpMethod": "POST", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferObjectAddMessageRequest"}, "response": {"$ref": "OfferObjectAddMessageResponse"}}, "get": {"id": "walletobjects.offerobject.get", "path": "offerObject/{resourceId}", "httpMethod": "GET", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferObjectGetRequest"}, "response": {"$ref": "OfferObject"}}, "insert": {"id": "walletobjects.offerobject.insert", "path": "offerObject", "httpMethod": "POST", "request": {"$ref": "OfferObject"}, "response": {"$ref": "OfferObject"}}, "list": {"id": "walletobjects.offerobject.list", "path": "offerObject", "httpMethod": "GET", "parameters": {"classId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "token": {"type": "string", "location": "query"}}, "request": {"$ref": "OfferObjectListRequest"}, "response": {"$ref": "OfferObjectListResponse"}}, "patch": {"id": "walletobjects.offerobject.patch", "path": "offerObject/{resourceId}", "httpMethod": "PATCH", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferObject"}, "response": {"$ref": "OfferObject"}}, "update": {"id": "walletobjects.offerobject.update", "path": "offerObject/{resourceId}", "httpMethod": "PUT", "parameters": {"resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OfferObject"}, "response": {"$ref": "OfferObject"}}}}', true));

  }
}



class Google_Barcode extends Google_Model {
  public $alternateText;
  public $kind;
  public $label;
  public $type;
  public $value;
  public function setAlternateText( $alternateText) {
    $this->alternateText = $alternateText;
  }
  public function getAlternateText() {
    return $this->alternateText;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLabel( $label) {
    $this->label = $label;
  }
  public function getLabel() {
    return $this->label;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Google_BoardingPassClass extends Google_Model {
  public $aircraftType;
  public $allowMultipleUsersPerObject;
  public $arrivalAirportCode;
  public $arrivalCityName;
  protected $__arrivalDateTimeActualType = 'Google_DateTime';
  protected $__arrivalDateTimeActualDataType = '';
  public $arrivalDateTimeActual;
  protected $__arrivalDateTimeScheduledType = 'Google_DateTime';
  protected $__arrivalDateTimeScheduledDataType = '';
  public $arrivalDateTimeScheduled;
  public $arrivalGate;
  public $arrivalTerminal;
  public $arrivalTimeZone;
  protected $__boardingDateTimeType = 'Google_DateTime';
  protected $__boardingDateTimeDataType = '';
  public $boardingDateTime;
  public $carrierCode;
  protected $__carrierLogoImageType = 'Google_Image';
  protected $__carrierLogoImageDataType = '';
  public $carrierLogoImage;
  public $carrierName;
  public $departureAirportCode;
  public $departureCityName;
  protected $__departureDateTimeActualType = 'Google_DateTime';
  protected $__departureDateTimeActualDataType = '';
  public $departureDateTimeActual;
  protected $__departureDateTimeScheduledType = 'Google_DateTime';
  protected $__departureDateTimeScheduledDataType = '';
  public $departureDateTimeScheduled;
  public $departureGate;
  public $departureTerminal;
  public $departureTimeZone;
  public $flightNumber;
  protected $__homepageUriType = 'Google_Uri';
  protected $__homepageUriDataType = '';
  public $homepageUri;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $issuerName;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $onboardServices;
  public $operatingCarrierCode;
  public $operatingCarrierName;
  public $operatingFlightNumber;
  protected $__renderSpecsType = 'Google_RenderSpec';
  protected $__renderSpecsDataType = 'array';
  public $renderSpecs;
  protected $__reviewType = 'Google_CommonWalletObjectClassReview';
  protected $__reviewDataType = '';
  public $review;
  public $reviewStatus;
  public $statusCode;
  public $version;
  public function setAircraftType( $aircraftType) {
    $this->aircraftType = $aircraftType;
  }
  public function getAircraftType() {
    return $this->aircraftType;
  }
  public function setAllowMultipleUsersPerObject( $allowMultipleUsersPerObject) {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject() {
    return $this->allowMultipleUsersPerObject;
  }
  public function setArrivalAirportCode( $arrivalAirportCode) {
    $this->arrivalAirportCode = $arrivalAirportCode;
  }
  public function getArrivalAirportCode() {
    return $this->arrivalAirportCode;
  }
  public function setArrivalCityName( $arrivalCityName) {
    $this->arrivalCityName = $arrivalCityName;
  }
  public function getArrivalCityName() {
    return $this->arrivalCityName;
  }
  public function setArrivalDateTimeActual(Google_DateTime $arrivalDateTimeActual) {
    $this->arrivalDateTimeActual = $arrivalDateTimeActual;
  }
  public function getArrivalDateTimeActual() {
    return $this->arrivalDateTimeActual;
  }
  public function setArrivalDateTimeScheduled(Google_DateTime $arrivalDateTimeScheduled) {
    $this->arrivalDateTimeScheduled = $arrivalDateTimeScheduled;
  }
  public function getArrivalDateTimeScheduled() {
    return $this->arrivalDateTimeScheduled;
  }
  public function setArrivalGate( $arrivalGate) {
    $this->arrivalGate = $arrivalGate;
  }
  public function getArrivalGate() {
    return $this->arrivalGate;
  }
  public function setArrivalTerminal( $arrivalTerminal) {
    $this->arrivalTerminal = $arrivalTerminal;
  }
  public function getArrivalTerminal() {
    return $this->arrivalTerminal;
  }
  public function setArrivalTimeZone( $arrivalTimeZone) {
    $this->arrivalTimeZone = $arrivalTimeZone;
  }
  public function getArrivalTimeZone() {
    return $this->arrivalTimeZone;
  }
  public function setBoardingDateTime(Google_DateTime $boardingDateTime) {
    $this->boardingDateTime = $boardingDateTime;
  }
  public function getBoardingDateTime() {
    return $this->boardingDateTime;
  }
  public function setCarrierCode( $carrierCode) {
    $this->carrierCode = $carrierCode;
  }
  public function getCarrierCode() {
    return $this->carrierCode;
  }
  public function setCarrierLogoImage(Google_Image $carrierLogoImage) {
    $this->carrierLogoImage = $carrierLogoImage;
  }
  public function getCarrierLogoImage() {
    return $this->carrierLogoImage;
  }
  public function setCarrierName( $carrierName) {
    $this->carrierName = $carrierName;
  }
  public function getCarrierName() {
    return $this->carrierName;
  }
  public function setDepartureAirportCode( $departureAirportCode) {
    $this->departureAirportCode = $departureAirportCode;
  }
  public function getDepartureAirportCode() {
    return $this->departureAirportCode;
  }
  public function setDepartureCityName( $departureCityName) {
    $this->departureCityName = $departureCityName;
  }
  public function getDepartureCityName() {
    return $this->departureCityName;
  }
  public function setDepartureDateTimeActual(Google_DateTime $departureDateTimeActual) {
    $this->departureDateTimeActual = $departureDateTimeActual;
  }
  public function getDepartureDateTimeActual() {
    return $this->departureDateTimeActual;
  }
  public function setDepartureDateTimeScheduled(Google_DateTime $departureDateTimeScheduled) {
    $this->departureDateTimeScheduled = $departureDateTimeScheduled;
  }
  public function getDepartureDateTimeScheduled() {
    return $this->departureDateTimeScheduled;
  }
  public function setDepartureGate( $departureGate) {
    $this->departureGate = $departureGate;
  }
  public function getDepartureGate() {
    return $this->departureGate;
  }
  public function setDepartureTerminal( $departureTerminal) {
    $this->departureTerminal = $departureTerminal;
  }
  public function getDepartureTerminal() {
    return $this->departureTerminal;
  }
  public function setDepartureTimeZone( $departureTimeZone) {
    $this->departureTimeZone = $departureTimeZone;
  }
  public function getDepartureTimeZone() {
    return $this->departureTimeZone;
  }
  public function setFlightNumber( $flightNumber) {
    $this->flightNumber = $flightNumber;
  }
  public function getFlightNumber() {
    return $this->flightNumber;
  }
  public function setHomepageUri(Google_Uri $homepageUri) {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri() {
    return $this->homepageUri;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setIssuerName( $issuerName) {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName() {
    return $this->issuerName;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setOnboardServices(/* array(Google_string) */ $onboardServices) {
    $this->assertIsArray($onboardServices, 'Google_string', __METHOD__);
    $this->onboardServices = $onboardServices;
  }
  public function getOnboardServices() {
    return $this->onboardServices;
  }
  public function setOperatingCarrierCode( $operatingCarrierCode) {
    $this->operatingCarrierCode = $operatingCarrierCode;
  }
  public function getOperatingCarrierCode() {
    return $this->operatingCarrierCode;
  }
  public function setOperatingCarrierName( $operatingCarrierName) {
    $this->operatingCarrierName = $operatingCarrierName;
  }
  public function getOperatingCarrierName() {
    return $this->operatingCarrierName;
  }
  public function setOperatingFlightNumber( $operatingFlightNumber) {
    $this->operatingFlightNumber = $operatingFlightNumber;
  }
  public function getOperatingFlightNumber() {
    return $this->operatingFlightNumber;
  }
  public function setRenderSpecs(/* array(Google_RenderSpec) */ $renderSpecs) {
    $this->assertIsArray($renderSpecs, 'Google_RenderSpec', __METHOD__);
    $this->renderSpecs = $renderSpecs;
  }
  public function getRenderSpecs() {
    return $this->renderSpecs;
  }
  public function setReview(Google_CommonWalletObjectClassReview $review) {
    $this->review = $review;
  }
  public function getReview() {
    return $this->review;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
  public function setStatusCode( $statusCode) {
    $this->statusCode = $statusCode;
  }
  public function getStatusCode() {
    return $this->statusCode;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_BoardingPassClassAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public $reviewStatus;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
}

class Google_BoardingPassClassAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_BoardingPassClass';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_BoardingPassClass $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_BoardingPassClassGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_BoardingPassClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_BoardingPassClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_BoardingPassClassListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_BoardingPassClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_BoardingPassClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_BoardingPassClassListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_BoardingPassClass';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_BoardingPassClass) */ $resources) {
    $this->assertIsArray($resources, 'Google_BoardingPassClass', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_BoardingPassClassMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_BoardingPassObject extends Google_Model {
  protected $__barcodeType = 'Google_Barcode';
  protected $__barcodeDataType = '';
  public $barcode;
  public $boardingZone;
  public $classId;
  protected $__classReferenceType = 'Google_BoardingPassClass';
  protected $__classReferenceDataType = '';
  public $classReference;
  public $electronicTicket;
  public $freqFlierAccountId;
  public $freqFlierProgramName;
  public $freqFlierTierLevel;
  public $holderCount;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  protected $__passengerNameType = 'Google_PassengerName';
  protected $__passengerNameDataType = '';
  public $passengerName;
  public $passengerStatus;
  public $recordLocator;
  public $seat;
  public $seatClass;
  public $seatDescriptions;
  public $securitySelecteeStatus;
  public $sequenceNumber;
  public $specialServiceCodes;
  public $state;
  public $ticketNumber;
  protected $__validTimeIntervalType = 'Google_TimeInterval';
  protected $__validTimeIntervalDataType = '';
  public $validTimeInterval;
  public $version;
  public function setBarcode(Google_Barcode $barcode) {
    $this->barcode = $barcode;
  }
  public function getBarcode() {
    return $this->barcode;
  }
  public function setBoardingZone( $boardingZone) {
    $this->boardingZone = $boardingZone;
  }
  public function getBoardingZone() {
    return $this->boardingZone;
  }
  public function setClassId( $classId) {
    $this->classId = $classId;
  }
  public function getClassId() {
    return $this->classId;
  }
  public function setClassReference(Google_BoardingPassClass $classReference) {
    $this->classReference = $classReference;
  }
  public function getClassReference() {
    return $this->classReference;
  }
  public function setElectronicTicket( $electronicTicket) {
    $this->electronicTicket = $electronicTicket;
  }
  public function getElectronicTicket() {
    return $this->electronicTicket;
  }
  public function setFreqFlierAccountId( $freqFlierAccountId) {
    $this->freqFlierAccountId = $freqFlierAccountId;
  }
  public function getFreqFlierAccountId() {
    return $this->freqFlierAccountId;
  }
  public function setFreqFlierProgramName( $freqFlierProgramName) {
    $this->freqFlierProgramName = $freqFlierProgramName;
  }
  public function getFreqFlierProgramName() {
    return $this->freqFlierProgramName;
  }
  public function setFreqFlierTierLevel( $freqFlierTierLevel) {
    $this->freqFlierTierLevel = $freqFlierTierLevel;
  }
  public function getFreqFlierTierLevel() {
    return $this->freqFlierTierLevel;
  }
  public function setHolderCount( $holderCount) {
    $this->holderCount = $holderCount;
  }
  public function getHolderCount() {
    return $this->holderCount;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setPassengerName(Google_PassengerName $passengerName) {
    $this->passengerName = $passengerName;
  }
  public function getPassengerName() {
    return $this->passengerName;
  }
  public function setPassengerStatus(/* array(Google_string) */ $passengerStatus) {
    $this->assertIsArray($passengerStatus, 'Google_string', __METHOD__);
    $this->passengerStatus = $passengerStatus;
  }
  public function getPassengerStatus() {
    return $this->passengerStatus;
  }
  public function setRecordLocator( $recordLocator) {
    $this->recordLocator = $recordLocator;
  }
  public function getRecordLocator() {
    return $this->recordLocator;
  }
  public function setSeat( $seat) {
    $this->seat = $seat;
  }
  public function getSeat() {
    return $this->seat;
  }
  public function setSeatClass( $seatClass) {
    $this->seatClass = $seatClass;
  }
  public function getSeatClass() {
    return $this->seatClass;
  }
  public function setSeatDescriptions(/* array(Google_string) */ $seatDescriptions) {
    $this->assertIsArray($seatDescriptions, 'Google_string', __METHOD__);
    $this->seatDescriptions = $seatDescriptions;
  }
  public function getSeatDescriptions() {
    return $this->seatDescriptions;
  }
  public function setSecuritySelecteeStatus( $securitySelecteeStatus) {
    $this->securitySelecteeStatus = $securitySelecteeStatus;
  }
  public function getSecuritySelecteeStatus() {
    return $this->securitySelecteeStatus;
  }
  public function setSequenceNumber( $sequenceNumber) {
    $this->sequenceNumber = $sequenceNumber;
  }
  public function getSequenceNumber() {
    return $this->sequenceNumber;
  }
  public function setSpecialServiceCodes(/* array(Google_string) */ $specialServiceCodes) {
    $this->assertIsArray($specialServiceCodes, 'Google_string', __METHOD__);
    $this->specialServiceCodes = $specialServiceCodes;
  }
  public function getSpecialServiceCodes() {
    return $this->specialServiceCodes;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setTicketNumber( $ticketNumber) {
    $this->ticketNumber = $ticketNumber;
  }
  public function getTicketNumber() {
    return $this->ticketNumber;
  }
  public function setValidTimeInterval(Google_TimeInterval $validTimeInterval) {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval() {
    return $this->validTimeInterval;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_BoardingPassObjectAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class Google_BoardingPassObjectAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_BoardingPassObject';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_BoardingPassObject $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_BoardingPassObjectGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_BoardingPassObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_BoardingPassObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_BoardingPassObjectListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_BoardingPassObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_BoardingPassObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_BoardingPassObjectListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_BoardingPassObject';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_BoardingPassObject) */ $resources) {
    $this->assertIsArray($resources, 'Google_BoardingPassObject', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_BoardingPassObjectMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_CommonWalletObjectClassReview extends Google_Model {
  public $comments;
  public function setComments( $comments) {
    $this->comments = $comments;
  }
  public function getComments() {
    return $this->comments;
  }
}

class Google_DateTime extends Google_Model {
  public $date;
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
}

class Google_FieldMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $id;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_GenericClass extends Google_Model {
  public $allowMultipleUsersPerObject;
  public $description;
  protected $__homepageUriType = 'Google_Uri';
  protected $__homepageUriDataType = '';
  public $homepageUri;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $issuerName;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  protected $__renderSpecsType = 'Google_RenderSpec';
  protected $__renderSpecsDataType = 'array';
  public $renderSpecs;
  protected $__reviewType = 'Google_CommonWalletObjectClassReview';
  protected $__reviewDataType = '';
  public $review;
  public $reviewStatus;
  public $title;
  protected $__titleImageType = 'Google_Image';
  protected $__titleImageDataType = '';
  public $titleImage;
  public $version;
  public function setAllowMultipleUsersPerObject( $allowMultipleUsersPerObject) {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject() {
    return $this->allowMultipleUsersPerObject;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setHomepageUri(Google_Uri $homepageUri) {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri() {
    return $this->homepageUri;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setIssuerName( $issuerName) {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName() {
    return $this->issuerName;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setRenderSpecs(/* array(Google_RenderSpec) */ $renderSpecs) {
    $this->assertIsArray($renderSpecs, 'Google_RenderSpec', __METHOD__);
    $this->renderSpecs = $renderSpecs;
  }
  public function getRenderSpecs() {
    return $this->renderSpecs;
  }
  public function setReview(Google_CommonWalletObjectClassReview $review) {
    $this->review = $review;
  }
  public function getReview() {
    return $this->review;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
  public function setTitle( $title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setTitleImage(Google_Image $titleImage) {
    $this->titleImage = $titleImage;
  }
  public function getTitleImage() {
    return $this->titleImage;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_GenericClassAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public $reviewStatus;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
}

class Google_GenericClassAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_GenericClass';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_GenericClass $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_GenericClassGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GenericClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GenericClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GenericClassListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GenericClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GenericClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GenericClassListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_GenericClass';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_GenericClass) */ $resources) {
    $this->assertIsArray($resources, 'Google_GenericClass', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_GenericClassMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_GenericObject extends Google_Model {
  protected $__barcodeType = 'Google_Barcode';
  protected $__barcodeDataType = '';
  public $barcode;
  public $classId;
  protected $__classReferenceType = 'Google_GenericClass';
  protected $__classReferenceDataType = '';
  public $classReference;
  public $holderCount;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $state;
  protected $__validTimeIntervalType = 'Google_TimeInterval';
  protected $__validTimeIntervalDataType = '';
  public $validTimeInterval;
  public $version;
  public function setBarcode(Google_Barcode $barcode) {
    $this->barcode = $barcode;
  }
  public function getBarcode() {
    return $this->barcode;
  }
  public function setClassId( $classId) {
    $this->classId = $classId;
  }
  public function getClassId() {
    return $this->classId;
  }
  public function setClassReference(Google_GenericClass $classReference) {
    $this->classReference = $classReference;
  }
  public function getClassReference() {
    return $this->classReference;
  }
  public function setHolderCount( $holderCount) {
    $this->holderCount = $holderCount;
  }
  public function getHolderCount() {
    return $this->holderCount;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setValidTimeInterval(Google_TimeInterval $validTimeInterval) {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval() {
    return $this->validTimeInterval;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_GenericObjectAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class Google_GenericObjectAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_GenericObject';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_GenericObject $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_GenericObjectGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GenericObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GenericObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GenericObjectListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GenericObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GenericObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GenericObjectListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_GenericObject';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_GenericObject) */ $resources) {
    $this->assertIsArray($resources, 'Google_GenericObject', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_GenericObjectMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_GiftCardClass extends Google_Model {
  public $allowMultipleUsersPerObject;
  protected $__homepageUriType = 'Google_Uri';
  protected $__homepageUriDataType = '';
  public $homepageUri;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $issuerName;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  public $merchantName;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  protected $__programLogoType = 'Google_Image';
  protected $__programLogoDataType = '';
  public $programLogo;
  protected $__renderSpecsType = 'Google_RenderSpec';
  protected $__renderSpecsDataType = 'array';
  public $renderSpecs;
  protected $__reviewType = 'Google_CommonWalletObjectClassReview';
  protected $__reviewDataType = '';
  public $review;
  public $reviewStatus;
  public $version;
  public function setAllowMultipleUsersPerObject( $allowMultipleUsersPerObject) {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject() {
    return $this->allowMultipleUsersPerObject;
  }
  public function setHomepageUri(Google_Uri $homepageUri) {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri() {
    return $this->homepageUri;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setIssuerName( $issuerName) {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName() {
    return $this->issuerName;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMerchantName( $merchantName) {
    $this->merchantName = $merchantName;
  }
  public function getMerchantName() {
    return $this->merchantName;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setProgramLogo(Google_Image $programLogo) {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo() {
    return $this->programLogo;
  }
  public function setRenderSpecs(/* array(Google_RenderSpec) */ $renderSpecs) {
    $this->assertIsArray($renderSpecs, 'Google_RenderSpec', __METHOD__);
    $this->renderSpecs = $renderSpecs;
  }
  public function getRenderSpecs() {
    return $this->renderSpecs;
  }
  public function setReview(Google_CommonWalletObjectClassReview $review) {
    $this->review = $review;
  }
  public function getReview() {
    return $this->review;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_GiftCardClassAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public $reviewStatus;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
}

class Google_GiftCardClassAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_GiftCardClass';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_GiftCardClass $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_GiftCardClassGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GiftCardClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GiftCardClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GiftCardClassListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GiftCardClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GiftCardClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GiftCardClassListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_GiftCardClass';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_GiftCardClass) */ $resources) {
    $this->assertIsArray($resources, 'Google_GiftCardClass', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_GiftCardClassMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_GiftCardObject extends Google_Model {
  protected $__barcodeType = 'Google_Barcode';
  protected $__barcodeDataType = '';
  public $barcode;
  public $cardNumber;
  public $classId;
  protected $__classReferenceType = 'Google_GiftCardClass';
  protected $__classReferenceDataType = '';
  public $classReference;
  public $holderCount;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $pin;
  public $state;
  protected $__validTimeIntervalType = 'Google_TimeInterval';
  protected $__validTimeIntervalDataType = '';
  public $validTimeInterval;
  public $version;
  public function setBarcode(Google_Barcode $barcode) {
    $this->barcode = $barcode;
  }
  public function getBarcode() {
    return $this->barcode;
  }
  public function setCardNumber( $cardNumber) {
    $this->cardNumber = $cardNumber;
  }
  public function getCardNumber() {
    return $this->cardNumber;
  }
  public function setClassId( $classId) {
    $this->classId = $classId;
  }
  public function getClassId() {
    return $this->classId;
  }
  public function setClassReference(Google_GiftCardClass $classReference) {
    $this->classReference = $classReference;
  }
  public function getClassReference() {
    return $this->classReference;
  }
  public function setHolderCount( $holderCount) {
    $this->holderCount = $holderCount;
  }
  public function getHolderCount() {
    return $this->holderCount;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setPin( $pin) {
    $this->pin = $pin;
  }
  public function getPin() {
    return $this->pin;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setValidTimeInterval(Google_TimeInterval $validTimeInterval) {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval() {
    return $this->validTimeInterval;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_GiftCardObjectAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class Google_GiftCardObjectAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_GiftCardObject';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_GiftCardObject $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_GiftCardObjectGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GiftCardObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GiftCardObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GiftCardObjectListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_GiftCardObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_GiftCardObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_GiftCardObjectListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_GiftCardObject';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_GiftCardObject) */ $resources) {
    $this->assertIsArray($resources, 'Google_GiftCardObject', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_GiftCardObjectMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_Image extends Google_Model {
  public $kind;
  protected $__sourceUriType = 'Google_Uri';
  protected $__sourceUriDataType = '';
  public $sourceUri;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSourceUri(Google_Uri $sourceUri) {
    $this->sourceUri = $sourceUri;
  }
  public function getSourceUri() {
    return $this->sourceUri;
  }
}

class Google_ImageModuleData extends Google_Model {
  protected $__mainImageType = 'Google_Image';
  protected $__mainImageDataType = '';
  public $mainImage;
  public function setMainImage(Google_Image $mainImage) {
    $this->mainImage = $mainImage;
  }
  public function getMainImage() {
    return $this->mainImage;
  }
}

class Google_InfoModuleData extends Google_Model {
  public $hexBackgroundColor;
  public $hexFontColor;
  protected $__labelValueRowsType = 'Google_LabelValueRow';
  protected $__labelValueRowsDataType = 'array';
  public $labelValueRows;
  public $showLastUpdateTime;
  public function setHexBackgroundColor( $hexBackgroundColor) {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor() {
    return $this->hexBackgroundColor;
  }
  public function setHexFontColor( $hexFontColor) {
    $this->hexFontColor = $hexFontColor;
  }
  public function getHexFontColor() {
    return $this->hexFontColor;
  }
  public function setLabelValueRows(/* array(Google_LabelValueRow) */ $labelValueRows) {
    $this->assertIsArray($labelValueRows, 'Google_LabelValueRow', __METHOD__);
    $this->labelValueRows = $labelValueRows;
  }
  public function getLabelValueRows() {
    return $this->labelValueRows;
  }
  public function setShowLastUpdateTime( $showLastUpdateTime) {
    $this->showLastUpdateTime = $showLastUpdateTime;
  }
  public function getShowLastUpdateTime() {
    return $this->showLastUpdateTime;
  }
}

class Google_LabelValue extends Google_Model {
  public $label;
  public $value;
  public function setLabel( $label) {
    $this->label = $label;
  }
  public function getLabel() {
    return $this->label;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Google_LabelValueRow extends Google_Model {
  protected $__columnsType = 'Google_LabelValue';
  protected $__columnsDataType = 'array';
  public $columns;
  public $hexBackgroundColor;
  public $hexFontColor;
  public function setColumns(/* array(Google_LabelValue) */ $columns) {
    $this->assertIsArray($columns, 'Google_LabelValue', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setHexBackgroundColor( $hexBackgroundColor) {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor() {
    return $this->hexBackgroundColor;
  }
  public function setHexFontColor( $hexFontColor) {
    $this->hexFontColor = $hexFontColor;
  }
  public function getHexFontColor() {
    return $this->hexFontColor;
  }
}

class Google_LatLongPoint extends Google_Model {
  public $kind;
  public $latitude;
  public $longitude;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLatitude( $latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLongitude( $longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
}

class Google_LinksModuleData extends Google_Model {
  protected $__urisType = 'Google_Uri';
  protected $__urisDataType = 'array';
  public $uris;
  public function setUris(/* array(Google_Uri) */ $uris) {
    $this->assertIsArray($uris, 'Google_Uri', __METHOD__);
    $this->uris = $uris;
  }
  public function getUris() {
    return $this->uris;
  }
}

class Google_LoyaltyClass extends Google_Model {
  public $accountIdLabel;
  public $accountNameLabel;
  public $allowMultipleUsersPerObject;
  protected $__homepageUriType = 'Google_Uri';
  protected $__homepageUriDataType = '';
  public $homepageUri;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $issuerName;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  protected $__programLogoType = 'Google_Image';
  protected $__programLogoDataType = '';
  public $programLogo;
  public $programName;
  protected $__renderSpecsType = 'Google_RenderSpec';
  protected $__renderSpecsDataType = 'array';
  public $renderSpecs;
  protected $__reviewType = 'Google_CommonWalletObjectClassReview';
  protected $__reviewDataType = '';
  public $review;
  public $reviewStatus;
  public $rewardsTier;
  public $rewardsTierLabel;
  public $version;
  public function setAccountIdLabel( $accountIdLabel) {
    $this->accountIdLabel = $accountIdLabel;
  }
  public function getAccountIdLabel() {
    return $this->accountIdLabel;
  }
  public function setAccountNameLabel( $accountNameLabel) {
    $this->accountNameLabel = $accountNameLabel;
  }
  public function getAccountNameLabel() {
    return $this->accountNameLabel;
  }
  public function setAllowMultipleUsersPerObject( $allowMultipleUsersPerObject) {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject() {
    return $this->allowMultipleUsersPerObject;
  }
  public function setHomepageUri(Google_Uri $homepageUri) {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri() {
    return $this->homepageUri;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setIssuerName( $issuerName) {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName() {
    return $this->issuerName;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setProgramLogo(Google_Image $programLogo) {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo() {
    return $this->programLogo;
  }
  public function setProgramName( $programName) {
    $this->programName = $programName;
  }
  public function getProgramName() {
    return $this->programName;
  }
  public function setRenderSpecs(/* array(Google_RenderSpec) */ $renderSpecs) {
    $this->assertIsArray($renderSpecs, 'Google_RenderSpec', __METHOD__);
    $this->renderSpecs = $renderSpecs;
  }
  public function getRenderSpecs() {
    return $this->renderSpecs;
  }
  public function setReview(Google_CommonWalletObjectClassReview $review) {
    $this->review = $review;
  }
  public function getReview() {
    return $this->review;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
  public function setRewardsTier( $rewardsTier) {
    $this->rewardsTier = $rewardsTier;
  }
  public function getRewardsTier() {
    return $this->rewardsTier;
  }
  public function setRewardsTierLabel( $rewardsTierLabel) {
    $this->rewardsTierLabel = $rewardsTierLabel;
  }
  public function getRewardsTierLabel() {
    return $this->rewardsTierLabel;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_LoyaltyClassAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public $reviewStatus;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
}

class Google_LoyaltyClassAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_LoyaltyClass';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_LoyaltyClass $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_LoyaltyClassGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_LoyaltyClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_LoyaltyClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_LoyaltyClassListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_LoyaltyClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_LoyaltyClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_LoyaltyClassListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_LoyaltyClass';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_LoyaltyClass) */ $resources) {
    $this->assertIsArray($resources, 'Google_LoyaltyClass', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_LoyaltyClassMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_LoyaltyObject extends Google_Model {
  public $accountId;
  public $accountName;
  protected $__barcodeType = 'Google_Barcode';
  protected $__barcodeDataType = '';
  public $barcode;
  public $classId;
  protected $__classReferenceType = 'Google_LoyaltyClass';
  protected $__classReferenceDataType = '';
  public $classReference;
  public $holderCount;
  public $id;
  protected $__imageModulesDataType = 'Google_ImageModuleData';
  protected $__imageModulesDataDataType = 'array';
  public $imageModulesData;
  protected $__infoModuleDataType = 'Google_InfoModuleData';
  protected $__infoModuleDataDataType = '';
  public $infoModuleData;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $kind;
  protected $__linksModuleDataType = 'Google_LinksModuleData';
  protected $__linksModuleDataDataType = '';
  public $linksModuleData;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__loyaltyPointsType = 'Google_LoyaltyPoints';
  protected $__loyaltyPointsDataType = '';
  public $loyaltyPoints;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $state;
  protected $__textModulesDataType = 'Google_TextModuleData';
  protected $__textModulesDataDataType = 'array';
  public $textModulesData;
  protected $__validTimeIntervalType = 'Google_TimeInterval';
  protected $__validTimeIntervalDataType = '';
  public $validTimeInterval;
  public $version;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAccountName( $accountName) {
    $this->accountName = $accountName;
  }
  public function getAccountName() {
    return $this->accountName;
  }
  public function setBarcode(Google_Barcode $barcode) {
    $this->barcode = $barcode;
  }
  public function getBarcode() {
    return $this->barcode;
  }
  public function setClassId( $classId) {
    $this->classId = $classId;
  }
  public function getClassId() {
    return $this->classId;
  }
  public function setClassReference(Google_LoyaltyClass $classReference) {
    $this->classReference = $classReference;
  }
  public function getClassReference() {
    return $this->classReference;
  }
  public function setHolderCount( $holderCount) {
    $this->holderCount = $holderCount;
  }
  public function getHolderCount() {
    return $this->holderCount;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageModulesData(/* array(Google_ImageModuleData) */ $imageModulesData) {
    $this->assertIsArray($imageModulesData, 'Google_ImageModuleData', __METHOD__);
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData() {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_InfoModuleData $infoModuleData) {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData() {
    return $this->infoModuleData;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinksModuleData(Google_LinksModuleData $linksModuleData) {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData() {
    return $this->linksModuleData;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setLoyaltyPoints(Google_LoyaltyPoints $loyaltyPoints) {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints() {
    return $this->loyaltyPoints;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setTextModulesData(/* array(Google_TextModuleData) */ $textModulesData) {
    $this->assertIsArray($textModulesData, 'Google_TextModuleData', __METHOD__);
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData() {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_TimeInterval $validTimeInterval) {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval() {
    return $this->validTimeInterval;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_LoyaltyObjectAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class Google_LoyaltyObjectAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_LoyaltyObject';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_LoyaltyObject $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_LoyaltyObjectGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_LoyaltyObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_LoyaltyObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_LoyaltyObjectListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_LoyaltyObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_LoyaltyObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_LoyaltyObjectListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_LoyaltyObject';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_LoyaltyObject) */ $resources) {
    $this->assertIsArray($resources, 'Google_LoyaltyObject', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_LoyaltyObjectMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_LoyaltyPoints extends Google_Model {
  protected $__balanceType = 'Google_LoyaltyPointsBalance';
  protected $__balanceDataType = '';
  public $balance;
  public $label;
  public $pointsType;
  protected $__pointsValidIntervalType = 'Google_TimeInterval';
  protected $__pointsValidIntervalDataType = '';
  public $pointsValidInterval;
  public function setBalance(Google_LoyaltyPointsBalance $balance) {
    $this->balance = $balance;
  }
  public function getBalance() {
    return $this->balance;
  }
  public function setLabel( $label) {
    $this->label = $label;
  }
  public function getLabel() {
    return $this->label;
  }
  public function setPointsType( $pointsType) {
    $this->pointsType = $pointsType;
  }
  public function getPointsType() {
    return $this->pointsType;
  }
  public function setPointsValidInterval(Google_TimeInterval $pointsValidInterval) {
    $this->pointsValidInterval = $pointsValidInterval;
  }
  public function getPointsValidInterval() {
    return $this->pointsValidInterval;
  }
}

class Google_LoyaltyPointsBalance extends Google_Model {
  public $double;
  public $int;
  protected $__moneyType = 'Google_Money';
  protected $__moneyDataType = '';
  public $money;
  public $string;
  public function setDouble( $double) {
    $this->double = $double;
  }
  public function getDouble() {
    return $this->double;
  }
  public function setInt( $int) {
    $this->int = $int;
  }
  public function getInt() {
    return $this->int;
  }
  public function setMoney(Google_Money $money) {
    $this->money = $money;
  }
  public function getMoney() {
    return $this->money;
  }
  public function setString( $string) {
    $this->string = $string;
  }
  public function getString() {
    return $this->string;
  }
}

class Google_Money extends Google_Model {
  public $currencyCode;
  public $kind;
  public $micros;
  public function setCurrencyCode( $currencyCode) {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode() {
    return $this->currencyCode;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMicros( $micros) {
    $this->micros = $micros;
  }
  public function getMicros() {
    return $this->micros;
  }
}

class Google_OfferClass extends Google_Model {
  public $allowMultipleUsersPerObject;
  public $details;
  protected $__distributionTimeIntervalType = 'Google_TimeInterval';
  protected $__distributionTimeIntervalDataType = '';
  public $distributionTimeInterval;
  public $finePrint;
  protected $__helpUriType = 'Google_Uri';
  protected $__helpUriDataType = '';
  public $helpUri;
  protected $__homepageUriType = 'Google_Uri';
  protected $__homepageUriDataType = '';
  public $homepageUri;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $issuerName;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $provider;
  public $redemptionChannel;
  protected $__renderSpecsType = 'Google_RenderSpec';
  protected $__renderSpecsDataType = 'array';
  public $renderSpecs;
  protected $__reviewType = 'Google_CommonWalletObjectClassReview';
  protected $__reviewDataType = '';
  public $review;
  public $reviewStatus;
  public $title;
  protected $__titleImageType = 'Google_Image';
  protected $__titleImageDataType = '';
  public $titleImage;
  public $version;
  public function setAllowMultipleUsersPerObject( $allowMultipleUsersPerObject) {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject() {
    return $this->allowMultipleUsersPerObject;
  }
  public function setDetails( $details) {
    $this->details = $details;
  }
  public function getDetails() {
    return $this->details;
  }
  public function setDistributionTimeInterval(Google_TimeInterval $distributionTimeInterval) {
    $this->distributionTimeInterval = $distributionTimeInterval;
  }
  public function getDistributionTimeInterval() {
    return $this->distributionTimeInterval;
  }
  public function setFinePrint( $finePrint) {
    $this->finePrint = $finePrint;
  }
  public function getFinePrint() {
    return $this->finePrint;
  }
  public function setHelpUri(Google_Uri $helpUri) {
    $this->helpUri = $helpUri;
  }
  public function getHelpUri() {
    return $this->helpUri;
  }
  public function setHomepageUri(Google_Uri $homepageUri) {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri() {
    return $this->homepageUri;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setIssuerName( $issuerName) {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName() {
    return $this->issuerName;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setProvider( $provider) {
    $this->provider = $provider;
  }
  public function getProvider() {
    return $this->provider;
  }
  public function setRedemptionChannel( $redemptionChannel) {
    $this->redemptionChannel = $redemptionChannel;
  }
  public function getRedemptionChannel() {
    return $this->redemptionChannel;
  }
  public function setRenderSpecs(/* array(Google_RenderSpec) */ $renderSpecs) {
    $this->assertIsArray($renderSpecs, 'Google_RenderSpec', __METHOD__);
    $this->renderSpecs = $renderSpecs;
  }
  public function getRenderSpecs() {
    return $this->renderSpecs;
  }
  public function setReview(Google_CommonWalletObjectClassReview $review) {
    $this->review = $review;
  }
  public function getReview() {
    return $this->review;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
  public function setTitle( $title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setTitleImage(Google_Image $titleImage) {
    $this->titleImage = $titleImage;
  }
  public function getTitleImage() {
    return $this->titleImage;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_OfferClassAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public $reviewStatus;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReviewStatus( $reviewStatus) {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus() {
    return $this->reviewStatus;
  }
}

class Google_OfferClassAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_OfferClass';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_OfferClass $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_OfferClassGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_OfferClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_OfferClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_OfferClassListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_OfferClassMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_OfferClassMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_OfferClassListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_OfferClass';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_OfferClass) */ $resources) {
    $this->assertIsArray($resources, 'Google_OfferClass', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_OfferClassMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_OfferObject extends Google_Model {
  protected $__barcodeType = 'Google_Barcode';
  protected $__barcodeDataType = '';
  public $barcode;
  public $classId;
  protected $__classReferenceType = 'Google_OfferClass';
  protected $__classReferenceDataType = '';
  public $classReference;
  public $holderCount;
  public $id;
  protected $__issuerDataType = 'Google_TypedValue';
  protected $__issuerDataDataType = '';
  public $issuerData;
  public $kind;
  protected $__locationsType = 'Google_LatLongPoint';
  protected $__locationsDataType = 'array';
  public $locations;
  protected $__messagesType = 'Google_WalletObjectMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $state;
  protected $__validTimeIntervalType = 'Google_TimeInterval';
  protected $__validTimeIntervalDataType = '';
  public $validTimeInterval;
  public $version;
  public function setBarcode(Google_Barcode $barcode) {
    $this->barcode = $barcode;
  }
  public function getBarcode() {
    return $this->barcode;
  }
  public function setClassId( $classId) {
    $this->classId = $classId;
  }
  public function getClassId() {
    return $this->classId;
  }
  public function setClassReference(Google_OfferClass $classReference) {
    $this->classReference = $classReference;
  }
  public function getClassReference() {
    return $this->classReference;
  }
  public function setHolderCount( $holderCount) {
    $this->holderCount = $holderCount;
  }
  public function getHolderCount() {
    return $this->holderCount;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIssuerData(Google_TypedValue $issuerData) {
    $this->issuerData = $issuerData;
  }
  public function getIssuerData() {
    return $this->issuerData;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocations(/* array(Google_LatLongPoint) */ $locations) {
    $this->assertIsArray($locations, 'Google_LatLongPoint', __METHOD__);
    $this->locations = $locations;
  }
  public function getLocations() {
    return $this->locations;
  }
  public function setMessages(/* array(Google_WalletObjectMessage) */ $messages) {
    $this->assertIsArray($messages, 'Google_WalletObjectMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setValidTimeInterval(Google_TimeInterval $validTimeInterval) {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval() {
    return $this->validTimeInterval;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class Google_OfferObjectAddMessageRequest extends Google_Model {
  protected $__messageType = 'Google_WalletObjectMessage';
  protected $__messageDataType = '';
  public $message;
  public function setMessage(Google_WalletObjectMessage $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class Google_OfferObjectAddMessageResponse extends Google_Model {
  protected $__resourceType = 'Google_OfferObject';
  protected $__resourceDataType = '';
  public $resource;
  public function setResource(Google_OfferObject $resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
}

class Google_OfferObjectGetRequest extends Google_Model {
  protected $__resultMaskType = 'Google_OfferObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_OfferObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_OfferObjectListRequest extends Google_Model {
  protected $__resultMaskType = 'Google_OfferObjectMask';
  protected $__resultMaskDataType = '';
  public $resultMask;
  public function setResultMask(Google_OfferObjectMask $resultMask) {
    $this->resultMask = $resultMask;
  }
  public function getResultMask() {
    return $this->resultMask;
  }
}

class Google_OfferObjectListResponse extends Google_Model {
  protected $__paginationType = 'Google_Pagination';
  protected $__paginationDataType = '';
  public $pagination;
  protected $__resourcesType = 'Google_OfferObject';
  protected $__resourcesDataType = 'array';
  public $resources;
  public function setPagination(Google_Pagination $pagination) {
    $this->pagination = $pagination;
  }
  public function getPagination() {
    return $this->pagination;
  }
  public function setResources(/* array(Google_OfferObject) */ $resources) {
    $this->assertIsArray($resources, 'Google_OfferObject', __METHOD__);
    $this->resources = $resources;
  }
  public function getResources() {
    return $this->resources;
  }
}

class Google_OfferObjectMask extends Google_Model {
  protected $__fieldsType = 'Google_FieldMask';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $projection;
  public function setFields(/* array(Google_FieldMask) */ $fields) {
    $this->assertIsArray($fields, 'Google_FieldMask', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setProjection( $projection) {
    $this->projection = $projection;
  }
  public function getProjection() {
    return $this->projection;
  }
}

class Google_Pagination extends Google_Model {
  public $kind;
  public $nextPageToken;
  public $resultsPerPage;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken( $nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setResultsPerPage( $resultsPerPage) {
    $this->resultsPerPage = $resultsPerPage;
  }
  public function getResultsPerPage() {
    return $this->resultsPerPage;
  }
}

class Google_PassengerName extends Google_Model {
  public $first;
  public $last;
  public $middle;
  public $prefix;
  public $suffix;
  public function setFirst( $first) {
    $this->first = $first;
  }
  public function getFirst() {
    return $this->first;
  }
  public function setLast( $last) {
    $this->last = $last;
  }
  public function getLast() {
    return $this->last;
  }
  public function setMiddle( $middle) {
    $this->middle = $middle;
  }
  public function getMiddle() {
    return $this->middle;
  }
  public function setPrefix( $prefix) {
    $this->prefix = $prefix;
  }
  public function getPrefix() {
    return $this->prefix;
  }
  public function setSuffix( $suffix) {
    $this->suffix = $suffix;
  }
  public function getSuffix() {
    return $this->suffix;
  }
}

class Google_RenderSpec extends Google_Model {
  public $templateFamily;
  public $viewName;
  public function setTemplateFamily( $templateFamily) {
    $this->templateFamily = $templateFamily;
  }
  public function getTemplateFamily() {
    return $this->templateFamily;
  }
  public function setViewName( $viewName) {
    $this->viewName = $viewName;
  }
  public function getViewName() {
    return $this->viewName;
  }
}

class Google_TextModuleData extends Google_Model {
  public $body;
  public $header;
  public function setBody( $body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setHeader( $header) {
    $this->header = $header;
  }
  public function getHeader() {
    return $this->header;
  }
}

class Google_TimeInterval extends Google_Model {
  protected $__endType = 'Google_DateTime';
  protected $__endDataType = '';
  public $end;
  public $kind;
  protected $__startType = 'Google_DateTime';
  protected $__startDataType = '';
  public $start;
  public function setEnd(Google_DateTime $end) {
    $this->end = $end;
  }
  public function getEnd() {
    return $this->end;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStart(Google_DateTime $start) {
    $this->start = $start;
  }
  public function getStart() {
    return $this->start;
  }
}

class Google_TypedValue extends Google_Model {
  public $bool;
  public $double;
  protected $__imageType = 'Google_Image';
  protected $__imageDataType = '';
  public $image;
  public $int;
  public $kind;
  protected $__listType = 'Google_TypedValue';
  protected $__listDataType = 'array';
  public $list;
  public $string;
  protected $__uriType = 'Google_Uri';
  protected $__uriDataType = '';
  public $uri;
  public function setBool( $bool) {
    $this->bool = $bool;
  }
  public function getBool() {
    return $this->bool;
  }
  public function setDouble( $double) {
    $this->double = $double;
  }
  public function getDouble() {
    return $this->double;
  }
  public function setImage(Google_Image $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setInt( $int) {
    $this->int = $int;
  }
  public function getInt() {
    return $this->int;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setList(/* array(Google_TypedValue) */ $list) {
    $this->assertIsArray($list, 'Google_TypedValue', __METHOD__);
    $this->list = $list;
  }
  public function getList() {
    return $this->list;
  }
  public function setString( $string) {
    $this->string = $string;
  }
  public function getString() {
    return $this->string;
  }
  public function setUri(Google_Uri $uri) {
    $this->uri = $uri;
  }
  public function getUri() {
    return $this->uri;
  }
}

class Google_Uri extends Google_Model {
  public $description;
  public $kind;
  public $uri;
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setUri( $uri) {
    $this->uri = $uri;
  }
  public function getUri() {
    return $this->uri;
  }
}

class Google_WalletObjectMessage extends Google_Model {
  protected $__actionUriType = 'Google_Uri';
  protected $__actionUriDataType = '';
  public $actionUri;
  public $body;
  protected $__displayIntervalType = 'Google_TimeInterval';
  protected $__displayIntervalDataType = '';
  public $displayInterval;
  public $header;
  protected $__imageType = 'Google_Image';
  protected $__imageDataType = '';
  public $image;
  public $kind;
  public function setActionUri(Google_Uri $actionUri) {
    $this->actionUri = $actionUri;
  }
  public function getActionUri() {
    return $this->actionUri;
  }
  public function setBody( $body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setDisplayInterval(Google_TimeInterval $displayInterval) {
    $this->displayInterval = $displayInterval;
  }
  public function getDisplayInterval() {
    return $this->displayInterval;
  }
  public function setHeader( $header) {
    $this->header = $header;
  }
  public function getHeader() {
    return $this->header;
  }
  public function setImage(Google_Image $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}
