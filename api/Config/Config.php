<?php

/*
	* Config for PayPal specific values
*/

// Urls
if(isset($_SERVER['SERVER_NAME'])) {
    $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
    $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
    $url .= $_SERVER["REQUEST_URI"];
}
else {
    $url = "";
}

define("URL", array(

    "current" => $url,

    "services" => array(
        "orderCreate" => 'api/createOrder.php',
        "orderCapture" => 'api/captureOrder.php'
    )
));


// PayPal REST App credentials
define("PAYPAL_CREDENTIALS", array(
		"client_id" => "ARN5_hlu6Lpdx-8ATMQpO_XYWlhJGpiPVcm1BdjIAPNEiGWPJ3Xs1xzk2WjU-Jy-niaM7yMkSB5KI4Ep",
		"client_secret" => "EJlIEIaquMQZa9jEObdURd_iCHdUcQKFc2HHjPToL2hpcWiADxyp2H3CjOVyAVmrhKl92FXS9TJA-OQb"
));