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
/**
/*Transactions
The Transactions API allows you create and manage payments on your integration*/


// Transaction Totals

define(
	'TOTAL_TRANSACTION',
	'https://api.paystack.co/transaction/totals'
);

// List Transactions

define(
	'LIST_TRANSACTION',
	'https://api.paystack.co/transaction'
);

// Initialize Transaction 

define(
	'INITIALIZE_TRANSACTION',
	'https://api.paystack.co/transaction/initialize'
);

// Verify Transaction

define(
	'VERIFY_TRANSACTION',
	'https://api.paystack.co/transaction/verify/' ///// will take :reference has an arguement 
);

// Fetch Transaction

define(
	'FETCH_TRANSACTION',
	'https://api.paystack.co/transaction/' ///// will take :id has an arguement 
);


// Charge Authorization

define(
	'CHARGE_AUTHORIZATION',
	'https://api.paystack.co/transaction/charge_authorization'
);

// Check Authorization

define(
	'CHECK_AUTHORIZATION',
	'https://api.paystack.co/transaction/check_authorization'
);

// View Transaction Timeline

define(
	'VIEW_TRANSATION_TIMELINE',
	'https://api.paystack.co/transaction/timeline/' // Takes :id or :reference as arguement
);

// Export Transactions

define(
	'EXPORT_TRANSACTIONS',
	'https://api.paystack.co/transaction/export'
);

// Partial Debit

define(
	'PARTIAL_DEBIT',
	'https://api.paystack.co/transaction/partial_debit'
);



/*Transaction Splits 
The Transaction Splits API enables merchants split the settlement for 
a transaction across their payout account, and one or more Subaccounts.*/

//Coming soon



?>