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
    // Define text module data.
    $textModulesData = array(
        array(
            'header' => 'Rewards details',
            'body' => 'Welcome to Baconrista rewards. For every 5 ' .
                'coffees purchased you will receive a free bacon fat latte.'
        )
    );
    // Define links module data.
    $linksModuleData = new Google_Service_Walletobjects_LinksModuleData();
    $uris = array (
        array(
            'uri' => 'http://www.baconrista.com',
            'kind' => 'walletobjecs#uri',
            'description' => 'Baconrista'
        )
    );
    $linksModuleData->setUris($uris);
    // Define info module data.
    $infoModuleData = new Google_Service_Walletobjects_InfoModuleData();
    $infoModuleData->setHexBackgroundColor('#ABABAB');
    $infoModuleData->setHexFontColor('#FF3300');

    // Messages to be displayed to all users of Wallet Objects.
    $messages = array(array(
        'actionUri' => array(
            'kind' => 'walletobjects#uri',
            'uri' => 'http://baconrista.com'
        ),
        'header' => 'Welcome to Banconrista Rewards!',
        'body' => 'Featuring our new bacon donuts.',
        'image' => array(
            'kind' => 'walletobjects#image',
            'sourceUri' => array(
                'kind' => 'walletobjects#uri',
                'uri' => 'http://farm8.staticflickr.com/7302/'.
                '11177240353_115daa5729_o.jpg'
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
    $uriInstance = new Google_Service_Walletobjects_Uri();
    $imageInstance = new Google_Service_Walletobjects_Image();
    $uriInstance->setUri(
        'http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg'
    );
    $imageInstance->setSourceUri($uriInstance);
    // Create wallet class.
    $wobClass = new Google_Service_Walletobjects_LoyaltyClass();
    $wobClass->setId($issuerId.'.'.$classId);
    $wobClass->setVersion(1);
    $wobClass->setIssuerName('Baconrista');
    $wobClass->setProgramName('Baconrista Rewards');
    $wobClass->setProgramLogo($imageInstance);
    $wobClass->setRewardsTierLabel('Tier');
    $wobClass->setRewardsTier('Gold');
    $wobClass->setAccountNameLabel('Member Name');
    $wobClass->setAccountIdLabel('Member Id');
    $wobClass->setRenderSpecs($renderSpecs);
    $wobClass->setInfoModuleData($infoModuleData);
    $wobClass->setLinksModuleData($linksModuleData);
    $wobClass->setTextModulesData($textModulesData);
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
    $barcode = new Google_Service_Walletobjects_Barcode();
    $barcode->setAlternateText('12345');
    $barcode->setLabel('User Id');
    $barcode->setType('qrCode');
    $barcode->setValue('28343E3');
    // Define text module data.
    $textModulesData = array(
        array(
            'header' => 'Janes Baconrista Rewards',
            'body' => 'You are 5 coffees away from receiving a free '.
                      'bacon fat latte'
        )
    );
    // Define links module data.
    $linksModuleData = new Google_Service_Walletobjects_LinksModuleData();
    $uris = array (
        array(
            'uri' => 'http://www.baconrista.com/myaccount?id=1234567890',
            'kind' => 'walletobjecs#uri',
            'description' => 'My Baconrista Account'
        )
    );
    $linksModuleData->setUris($uris);
    // Define label values.
    $labelValueRows = array(
        array(
            'hexFontColor' => '#000000',
            'hexBackgroundColor' => '#BBCCFC',
            'columns' => array(
                array(
                    'label' => 'Member Name',
                    'value' => 'Jane Doe'
                ), array(
                    'label' => 'Membership #',
                    'value' => '1234567890'
                )
            )
        ),
        array(
            'hexFontColor' => '#EDEDDD',
            'hexBackgroundColor' => '#FFFB00',
            'columns' => array(
                array(
                    'label' => 'Next Reward in',
                    'value' => '2 coffees'
                ), array(
                    'label' => 'Member Since',
                    'value' => '01/15/2013'
                )
            )
        )
    );
    // Define info module data.
    $infoModuleData = new Google_Service_Walletobjects_InfoModuleData();
    $infoModuleData->setHexBackgroundColor('#FC058C');
    $infoModuleData->setHexFontColor('#FFFFFF');
    $infoModuleData->setShowLastUpdateTime(true);
    $infoModuleData->setLabelValueRows($labelValueRows);
    // Messages to be displayed.
    $messages = array(array(
        'actionUri' => array(
            'kind' => 'walletobjects#uri',
            'uri' => 'http://baconrista.com'
        ),
        'header' => 'Jane, welcome to Banconrista Rewards!',
        'body' => 'Thanks for joining our program. Show this message to '.
                  'our barista for your first free coffee on us!',
        'image' => array(
            'kind' => 'walletobjects#image',
            'sourceUri' => array(
                'kind' => 'walletobjects#uri',
                'uri' => 'http://farm4.staticflickr.com/3723/'.
                '11177041115_6e6a3b6f49_o.jpg'
            )
        ),
        'kind' => 'walletobjects#walletObjectMessage'
    ));
    // Reward points a user has.
    $points = new Google_Service_Walletobjects_LoyaltyPoints();
    $balance = new Google_Service_Walletobjects_LoyaltyPointsBalance();
    $balance->setString('500');
    $points->setBalance($balance);
    $points->setLabel('Points');
    $points->setPointsType('points');
    // Create wallet object.
    $wobObject = new Google_Service_Walletobjects_LoyaltyObject();
    $wobObject->setClassId($issuerId.".".$classId);
    $wobObject->setId($issuerId.".".$objectId);
    $wobObject->setVersion(1);
    $wobObject->setState('active');
    $wobObject->setBarcode($barcode);
    $wobObject->setInfoModuleData($infoModuleData);
    $wobObject->setLinksModuleData($linksModuleData);
    $wobObject->setTextModulesData($textModulesData);
    $wobObject->setAccountName('Jane Doe');
    $wobObject->setAccountId('1234567890');
    $wobObject->setLoyaltyPoints($points);
    $wobObject->setMessages($messages);
    return $wobObject;
  }
}
