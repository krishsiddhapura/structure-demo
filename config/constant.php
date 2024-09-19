<?php

if (!defined('ASSET_VERSION'))
    define('ASSET_VERSION', '?v1.0.0');

if(!defined('IMAGE_PLACEHOLDER'))
    define('IMAGE_PLACEHOLDER','assets/admin/images/placeholder/image.png');

if(!defined('PROFILE_PLACEHOLDER'))
    define('PROFILE_PLACEHOLDER','assets/admin/images/placeholder/user.png');

if(!defined('DT_ERROR'))
    define('DT_ERROR','No data available in table !');

if(!defined('ERROR_400'))
    define('ERROR_400','Bad request !');

if(!defined('ERROR_401'))
    define('ERROR_401','Session Expired: Please Log In Again !');

if(!defined('ERROR_403'))
    define('ERROR_403','Request forbidden or not permission !');

if(!defined('ERROR_500'))
    define('ERROR_500','Internal server error !');

if (!defined('CURRENCY'))
    define('CURRENCY', "₹");


// FOR API PARSING
if(!defined('BASE_URL'))
    define('BASE_URL', "http://localhost/");
