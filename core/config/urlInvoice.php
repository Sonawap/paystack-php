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

// The Invoice API allows you create and manage customers on your integration.


	
define(
    'CREATE_INVOICE',
    'https://api.paystack.co/paymentrequest'
);


define(
    'LIST_INVOICES',
    'https://api.paystack.co/paymentrequest'
);

define(
    'FETCH_INVOICE',
    'https://api.paystack.co/paymentrequest/'
);

define(
    'UPDATE_INVOICE',
    'https://api.paystack.co/paymentrequest/'
);

define(
    'VERIFY_INVOICE',
    'https://api.paystack.co/paymentrequest/verify/'
);

define(
    'TOTAL_INVOICE',
    'https://api.paystack.co/paymentrequest/totals'
);

define(
    'FINALIZE_INVOICE',
    'https://api.paystack.co/paymentrequest/finalize/'
);

define(
    'ARCHIVE_INVOICE',
    'https://api.paystack.co/paymentrequest/archive/'
);


define(
    'SEND_NOTIFICATION',
    "https://api.paystack.co/paymentrequest/notify/"
);


?>