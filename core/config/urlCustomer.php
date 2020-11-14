<?php

/**
 * Paystack - Use paystack apis
 * Version 1.0.
 *
 * @see https://github.com/Sonawap/paystack-php/ The payStackPhp GitHub project
 *
 * @author Sonawap - Paul Sola Moses - whatsapp - +234 70 6542 5688 - email: Paulsola79@gmail.com 
 * 
 * @Twitter - https://twitter.com/sonawap
 * @Intagram - https://instagram.com/sonawap
 * @facebook - https://facebook.com/paul.sola.986
 * 
 **/

// The Customers API allows you create and manage customers on your integration.


// Create a customer on your integration

	
define(
    'CREATE_CUSTOMER',
    'https://api.paystack.co/customer'
);

define(
    'LIST_CUSTOMER', 
    'https://api.paystack.co/customer'
);

define(
    'FETCH_CUSTOMER',
    'https://api.paystack.co/customer/'
);

define(
    'UPDATE_CUSTOMER',
    'https://api.paystack.co/customer/'
);

define(
    'WNB',
    'https://api.paystack.co/customer/set_risk_action'
);

define(
    'DEAUTH',
    'https://api.paystack.co/customer'
);

?>