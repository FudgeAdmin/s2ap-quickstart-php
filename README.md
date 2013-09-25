PHP Quick Start Sample for Wallet Object API Copyright (C) 2013 Google Inc.

wallet-objects-quickstart-PHP
==============================

Basic PHP implementation of the Google Wallet for Wallet Objects API.

This sample aims to provide a straight forward example of how to integrate the basic components of the Wallet Objects API.

### Setup

To setup the sample, edit config.php.

*  If you don't already have a Google contact, submit the [Sign up for  Wallet Objects API access form](https://support.google.com/wallet/objects/contact/WOB_interest?rd=1). Google will respond to qualified merchants with instructions on how to set up merchant credentials. Replace ISSUER_ID in config.php with your Merchant Id.
* Create an API project in the [Google API Console](https://code.google.com/apis/console/) then select the API Access tab in your API project, and click on Create an OAuth 2.0 client ID button. Select service account option from the list, Download the generated private key and save it in your application folder.
* Also enable Wallet Objects API in services tab.
* Replace CLIENT_ID, SERVICE_ACCOUNT_NAME, KEY_FILE and ORIGINS with your OAuth client Id, service account email address, private key file path and application origin url in config.php file.

### Google appengine.

To run application on google appengine requires [Google App Engine SDK](https://developers.google.com/appengine/downloads#Google_App_Engine_SDK_for_PHP) and PHP5.4+

1. Create new application at your [appengine account](https://appengine.google.com).
2. You need to register your application to be whitelisted before uploading it on appengine. Register your PHP applications to be deployed to App Engine visit [https://gaeforphp.appspot.com]( https://gaeforphp.appspot.com).
3. Change application name in app.yaml file.
4. Follow instruction to install google appengine sdk for php and to upload the application on [Google Appengine for PHP Docs](https://developers.google.com/appengine/docs/php/gettingstarted/introduction)

### Local dev.

To run application on local server requires [apache HTTP server](http://apache.org/) 2.0 or greater and PHP5+.

1. Make sure "allow_url_include" option is enabled in php.ini file.
2. Copy the files to default DocumentRoot of the server.
3. You can now visit http://localhost in your browser to see the application in action.

The app showcases several aspects of the API

* Creation of Wallet Classes and Objects
* Save to Wallet insertion of Classes and Objects
* Webservice API

## Creation of Wallet Classes and Objects
Example code for creation of Classes and Objects can be found under the verticals directory. Each vertical is broken out into it's own class.

## Save to Wallet insertion of Classes and Objects
Save to Wallet is handled on both the client and server side. index.html is the landing page which then includes app.js. App.js makes a request to the jwt.php to generate vertical specific JWTs. Once all of the JWTs are generated, app.js inserts the appropriate g:wallet tags and the Save to Wallet JS. The JS must be appended after the g:wallet tags because it parses the page to render Save to Wallet buttons when it's completed loading.

## Webservice API
The Webservice API handler is webservice.php. This script handles Webservice requests, generates Loyalty Objects converts them to JWTs and responds with the JWT. You can configure your discoverable to point to the URL handled by the webservice.php.
