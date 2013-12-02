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
 * Set access token and include all required classes in the application.
 */
require_once 'header.php';

/**
 * This class contains utility functions to create request/response objects for
 * webservice api.
 */
require_once 'utils/wob_utils.php';

/**
 * Set webservice response..
 */
require_once 'webservice/webservice_response.php';

// Create WobUilts object to handle requests.
$utils = new WobUtils();
// Get webservice request object
$inputJson = file_get_contents('php://input');
$input= json_decode( $inputJson, TRUE );
$requestObject = $utils->getWebserviceRequestObject($input);

//Get linking id the merchant loyalty program account identification.
$linkId = (is_object($requestObject)) ?
  $requestObject->getParams()->getLinkingId() : NULL;
// Get api version from request object.
$apiVersion = (is_object($requestObject)) ?
  $requestObject->getApiVersion() : '1.0';

// Create loyalty object based on linking id.
$loyaltyObjectId = ($linkId != NULL) ? $linkId : LOYALTY_OBJECT_ID;
$loyaltyObject = Loyalty::generateLoyaltyObject(ISSUER_ID, LOYALTY_CLASS_ID,
    $loyaltyObjectId);

if(is_object($loyaltyObject)) {
  // Handle signup and linking.
  $webResponse = new WebserviceResponse('Nice! You have added your program' ,
      'approved');
  // Generate Web Service Response Body.
  $responseBody = $utils->generateWebserviceResponse($loyaltyObject,
      $webResponse, $apiVersion);
} else {
  $errorAction = ($linkId != NULL) ? "link" : "signup";
  // For rejected sign-up/linking.
  $webResponse = new WebserviceResponse(
      'Sorry we can\'t complete this #{'.$errorAction.'}' , 'rejected');
  // Generate Web Service Response Body.
  $responseBody = $utils->generateWebserviceResponse('', $webResponse,
      $apiVersion);
}

// Create the response JWT.
echo $jwt = $utils->makeSignedJwt($responseBody, $cred);
