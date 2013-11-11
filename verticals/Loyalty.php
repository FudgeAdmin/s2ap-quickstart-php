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
 * Class to generate example Loyalty class and objects
 */
class Loyalty {

  /**
   * Generates a Loyalty Class
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @return Object $wobClass Loyaltyclass resource.
   */
  public static function generateLoyaltyClass($issuerId, $classId) {
    // Used to select which templates to use for rendering in this section.
    $renderSpecs = array(
        array('templateFamily' => '1.loyaltyCard1_list',
            'viewName' => 'g_list'),
        array('templateFamily' => '1.loyaltyCard1_expanded',
            'viewName' => 'g_expanded'));
    // Messages to be displayed to all users of Wallet Objects.
    $messages = array(array(
        'actionUri' => array(
            'kind' => 'walletobjects#uri',
            'uri' => 'http://baconrista.com'
        ),
        'body' => 'Welcome to Banconrista Rewards!',
        'header' => 'Welcome',
        'image' => array(
            'kind' => 'walletobjects#image',
            'sourceUri' => array(
                'kind' => 'walletobjects#uri',
                'uri' => 'https://ssl.gstatic.com/codesite/ph/images/'.
                'search-48.gif'
            )
        ),
        'kind' => 'walletobjects#walletObjectMessage'
    ));
    // A list of locations at which the Wallet Class can be used.
    $locations = array(
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.422601,
            'longitude' => -122.085286
        )
    );
    // Source uri of program logo.
    $uriInstance = new Google_Uri();
    $imageInstance = new Google_Image();
    $uriInstance->setUri(
        'http://www.google.com/landing/chrome/ugc/chrome-icon.jpg'
    );
    $imageInstance->setSourceUri($uriInstance);
    // Create wallet class.
    $wobClass = new Google_LoyaltyClass();
    $wobClass->setId($issuerId.'.'.$classId);
    $wobClass->setVersion(1);
    $wobClass->setIssuerName('Baconrista');
    $wobClass->setProgramName('Baconrista Rewards');
    $wobClass->setHomepageUri($uriInstance);
    $wobClass->setProgramLogo($imageInstance);
    $wobClass->setRewardsTierLabel('Tier');
    $wobClass->setRewardsTier('Gold');
    $wobClass->setAccountNameLabel('Member Name');
    $wobClass->setAccountIdLabel('Member Id');
    $wobClass->setRenderSpecs($renderSpecs);
    $wobClass->setMessages($messages);
    $wobClass->setReviewStatus('underReview');
    $wobClass->setAllowMultipleUsersPerObject(true);
    $wobClass->setLocations($locations);
    return $wobClass;
  }

  /**
   * Generates a Loyalty Object
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @param String $objectId Unique identifier for a wallet object.
   * @return Object $wobObject Loyaltyobject resource.
   */
  public static function generateLoyaltyObject($issuerId, $classId, $objectId) {
    // Define barcode type and value.
    $barcode = new Google_Barcode();
    $barcode->setAlternateText('12345');
    $barcode->setLabel('User Id');
    $barcode->setType('qrCode');
    $barcode->setValue('28343E3');
    // Define text module data.
    $textModulesData = array(
        'header' => 'Rewards details',
        'body' => 'Welcome to Baconrista rewards. For every 5 ' .
            'coffees purchased you\'ll receive a free bacon fat latte.');
    // Define links module data.
    $linksModuleData = new Google_LinksModuleData();
    $uris = array (
        'uri' => 'http://www.example.com',
        'kind' => 'walletobjecs#uri',
        'description' => 'Example'
    );
    $linksModuleData->setUris($uris);
    // Define label values.
    $labelValueRows = array(
        array(
            'columns' => array(
                array(
                    'label' => 'Member Name',
                    'value' => 'Joe Smith'
                ), array(
                    'label' => 'Next Reward in',
                    'value' => '2 Coffee'
                )
            )
        ),
        array(
            'columns' => array(
                array(
                    'label' => 'Label 2',
                    'value' => 'Value 2'
                ), array(
                    'label' => 'Lable 3',
                    'value' => 'Value 3'
                )
            )
        )
    );
    // Define info module data.
    $infoModuleData = new Google_InfoModuleData();
    $infoModuleData->setHexBackgroundColor('#b41515');
    $infoModuleData->setHexFontColor('#e7e12f');
    $infoModuleData->setShowLastUpdateTime(true);
    $infoModuleData->setLabelValueRows($labelValueRows);
    // Messages to be displayed.
    $messages = array(array(
        'actionUri' => array(
            'kind' => 'walletobjects#uri',
            'uri' => 'http://baconrista.com'
        ),
        'body' => 'Welcome to Banconrista Rewards!',
        'header' => 'Welcome',
        'image' => array(
            'kind' => 'walletobjects#image',
            'sourceUri' => array(
                'kind' => 'walletobjects#uri',
                'uri' => 'https://ssl.gstatic.com/codesite/ph/images/'.
                'search-48.gif'
            )
        ),
        'kind' => 'walletobjects#walletObjectMessage'
    ));
    // Reward points a user has.
    $points = new Google_LoyaltyPoints();
    $balance = new Google_LoyaltyPointsBalance();
    $balance->setString('500');
    $points->setBalance($balance);
    $points->setLabel('Points');
    $points->setPointsType('rewards');
    // Create wallet object.
    $wobObject = new Google_LoyaltyObject();
    $wobObject->setClassId($issuerId.".".$classId);
    $wobObject->setId($issuerId.".".$objectId);
    $wobObject->setVersion(1);
    $wobObject->setState("active");
    $wobObject->setBarcode($barcode);
    $wobObject->setInfoModuleData($infoModuleData);
    $wobObject->setLinksModuleData($linksModuleData);
    $wobObject->setTextModulesData($textModulesData);
    $wobObject->setAccountName("Joe Smith");
    $wobObject->setAccountId("1234567890");
    $wobObject->setLoyaltyPoints($points);
    $wobObject->setMessages($messages);
    return $wobObject;
  }
}
