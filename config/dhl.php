<?php
return [
	'customerNumber' => env('DHL_CUSTOMER_NUMBER'),
	'apiLogin' => env('DHL_LOGIN_API'),
	'apiPassword' => env('DHL_PASSWORD_API'),
	'isSandbox' => env('DHL_SANDBOX',false)
];