AWHM
====

Execute WHM and Cpanel operation with  API by PHP


Installation
------------

Install the latest version with:

```bash
$ composer require  alaa-hany/awhm
```


Requirements
------------

* PHP 7.0 or higher is required


Supported Operations for Now 
----------------------------
* WHM
  * Accounts
    * Get all Cpanel  account
    * Create new Cpanel user
    * Delete Cpanel user
    * Get suspensions Cpanel users
    * Suspend Cpanel user
    * Unsuspend Cpanel user
  * Services
    * Restart service
    * Enable service
    * Disable service
    * Get service Status
    * Get service configuration
  * Mail
    * Get email accounts of Cpanel user
* Cpanel 
   * there is not supported operation for now

Basic usage
-----------
```php
// All API Calls made throw HTTPS 
use \Alaa\Awhm\base\WHMClient ;
$ipOrDomain = "YOUR_IP_OR_DOMAIN"; // IP is preferred , we take care of get Domain
$user  = 'root' ; //  for example
$token = "YOUR_TOKEN" ; //
$whmClient = new WHMClient($ipOrDomain , $user , $token);

//--------- Accounts ---------//

// get All Cpanel users
var_dump($whmClient->accountsManagementInstance()->all());

// Create Cpanel users
$diskSizeInMegaBytes = 500; // Default unlimited
var_dump ($whmClient->accountsManagementInstance()->create("USER_NAME" , "PASSWORD" , $diskSizeInMegaBytes));
 
// get All suspended Cpanel users
var_dump ($whmClient->accountsManagementInstance()->suspensions());

// suspend Cpanel user
var_dump ($whmClient->accountsManagementInstance()->suspendCpanelUser("CPANEL_USER_NAME"));

// suspend Cpanel users
var_dump ($whmClient->accountsManagementInstance()->unsuspendCpanelUser("CPANEL_USER_NAME"));

// delete Cpanel users
var_dump ($whmClient->accountsManagementInstance()->delete("CPANEL_USER_NAME"));

//----------- Services -----------//

/**
*  \Alaa\Awhm\whm\services\Services class contain some service name , You can use it or pass service's Name 
 */

// restart service
var_dump ($whmClient->servicesManagementInstance()->restartService(\Alaa\Awhm\whm\services\Services::HTTP));

// Disable Service
var_dump ($whmClient->servicesManagementInstance()->disableService(\Alaa\Awhm\whm\services\Services::FTP));

// Enable Service
var_dump ($whmClient->servicesManagementInstance()->enableService(\Alaa\Awhm\whm\services\Services::FTP));

// Get Service Config
var_dump ($whmClient->servicesManagementInstance()->getServiceConfig(\Alaa\Awhm\whm\services\Services::FTP));

// Get Service Status
var_dump ($whmClient->servicesManagementInstance()->getServiceStatus(\Alaa\Awhm\whm\services\Services::FTP));

//------- Mail --------//

// Get email accounts of Cpanel user
var_dump ($whmClient->mailManagementInstance()->getEmailAccountsOfCpanelUser("CPANEL_USER_NAME"));

```

Note
----
  If you need any non exists operation , you are welcome to order it . <br>
  Contact me on : <br>
  &nbsp;&nbsp;Email : [elboray.alaa1@gmail.com](mailto:elboray.alaa1@gmail.com) <br>
  &nbsp;&nbsp;whatsapp : [+201063745208](https://wa.me/201063745208)

License
-------
alaa-hany/awhm is licensed under the MIT License.
