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

define('APPLICATION_NAME', 'Wallet Object API Demo');
// Set your client id, service account name, and the path to your private key.
define('SERVICE_ACCOUNT_NAME', 'SERVICE_ACCOUNT_EMAIL_ADDRESS');
define('CLIENT_ID', 'OAUTH_CLIENT_ID');
// Make sure you keep your key.p12 file in a secure location, and isn't
// readable by others.
define('KEY_FILE', 'PRIVATE_KEY_FILE_PATH');
// Merchant account id.
define('ISSUER_ID', 'ISSUER_ID');
// Api scopes url.
define('SCOPES', 'https://www.googleapis.com/auth/wallet_object.issuer');
//Target audience for JWT.
define('AUDIENCE', 'google');
// Application origins.
$ORIGINS = array('ORIGINS');

// Type of request.
define('SAVE_TO_WALLET', 'savetowallet');
define('LOYALTY_WEB', 'loyaltywebservice');

// Wallet objects API classes and objects ids.
define('LOYALTY_CLASS_ID', 'LoyaltyClass');
define('LOYALTY_OBJECT_ID', 'LoyaltyObject');
define('OFFER_CLASS_ID', 'OfferClass');
define('OFFER_OBJECT_ID', 'OfferObject');

