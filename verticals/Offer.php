<?php
/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
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
 * Generates an example Offer Class and Object.
 */
class Offer {

  /**
   * Create an example Offer Class
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @return Object $wobClass Offerclass resource.
   */
  public static function generateOfferClass($issuerId, $classId) {
    // Used to select which templates to use for rendering in this section.
    $renderSpecs = array(
        array('templateFamily' => '1.offer1_list',
            'viewName' => 'g_list'),
        array('templateFamily' => '1.offer1_expanded',
            'viewName' => 'g_expanded'));
    // A list of locations at which the Wallet Class can be used.
    $locations = array(
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.442087,
            'longitude' => -122.161446
        ),
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.429379,
            'longitude' => -122.12272999999999
        ),
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.333646,
            'longitude' => -121.884853
        )
    );
    // Source uri of home page.
    $uriHomePageInstance = new Google_Service_Walletobjects_Uri();
    $imageHomePageInstance = new Google_Service_Walletobjects_Image();
    $uriHomePageInstance->setUri(
        'http://www.google.com/landing/chrome/ugc/chrome-icon.jpg'
    );
    $uriHomePageInstance->setDescription('Website');
    $imageHomePageInstance->setSourceUri($uriHomePageInstance);
    // Source uri of title image.
    $uriTitleImageInstance = new Google_Service_Walletobjects_Uri();
    $imageTitleImageInstance = new Google_Service_Walletobjects_Image();
    $uriTitleImageInstance->setUri(
        'http://3.bp.blogspot.com/-AvC1agljv9Y/TirbDXOBIPI/AAAAAAAACK0/'.
        'hR2gs5h2H6A/s1600/Bacon%2BWallpaper.png'
    );
    $imageTitleImageInstance->setSourceUri($uriTitleImageInstance);
    // Create wallet class.
    $wobClass = new Google_Service_Walletobjects_OfferClass();
    $wobClass->setId($issuerId.'.'.$classId);
    $wobClass->setVersion(1);
    $wobClass->setIssuerName('Baconrista Coffee');
    $wobClass->setTitle('20% off one cup of coffee');
    $wobClass->setProvider('Baconrista Deals');
    $wobClass->setDetails('20% off one cup of coffee at all Baconristas');
    $wobClass->setHomepageUri($uriHomePageInstance);
    $wobClass->setTitleImage($imageTitleImageInstance);
    $wobClass->setRenderSpecs($renderSpecs);
    $wobClass->setRedemptionChannel('both');
    $wobClass->setReviewStatus('underReview');
    $wobClass->setLocations($locations);
    $wobClass->setAllowMultipleUsersPerObject(true);
    return $wobClass;
  }

  /**
   * Create an example Offer Object
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @param String $objectId Unique identifier for a wallet object.
   * @return Object $wobObject Offerobject resource.
   */
  public static function generateOfferObject($issuerId, $classId, $objectId) {
    // Define barcode type and value.
    $barcode = new Google_Service_Walletobjects_Barcode();
    $barcode->setType('upcA');
    $barcode->setValue('123456789012');
    $barcode->setAlternateText('12345');
    $barcode->setLabel('User Id');
    // Create wallet object.
    $wobObject = new Google_Service_Walletobjects_OfferObject();
    $wobObject->setClassId($issuerId.'.'.$classId);
    $wobObject->setId($issuerId.'.'.$objectId);
    $wobObject->setVersion(1);
    $wobObject->setBarcode($barcode);
    $wobObject->setState('active');
    return $wobObject;
  }
}
