<?php
namespace Sonawap\Paystack\Transaction;

use Sonawap\Paystack\Transaction\Initiate\ExcuteAction;

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
require 'config/config.php';
require 'config/urlInvoice.php';
require(dirname(__DIR__).'../vendor/autoload.php');
require 'init/excute.php';

class Invoice extends ExcuteAction
{

    // Create an invoice for payment on your integration

	public function createInvoice($fields){
        return $this->excutePost(CREATE_INVOICE, $fields);
    }

    // Send notification of an invoice to your customers

    public function sendNotification($fields){
        return $this->excutePost(SEND_NOTIFICATION, $fields);
    }

    // Used to archive an invoice. Invoice will no longer be fetched on list or returned on verify.

    public function archiveInvoice($fields){
        return $this->excutePost(ARCHIVE_INVOICE, $fields);
    }

    // List the invoice available on your integration.
    public function listInvoices(array $params = []){
        return $this->excute(LIST_INVOICES, $params);
    }

    // Get invoice metrics for dashboard
    public function totalInvoice(array $params = []){
        return $this->excute(TOTAL_INVOICE, $params);
    }

    // Get details of an invoice on your integration.

    public function fetchInvoice($idOrCode, array $params = []){
        return $this->excute(FETCH_INVOICE.$idOrCode, $params);
    }

    // Finalize a Draft Invoice

    public function finalizeInvoice($idOrCode, array $params = []){
        return $this->excute(FINALIZE_INVOICE.$idOrCode, $params);
    }

    // Verify details of an invoice on your integration.

    public function verifyInvoice($idOrCode, array $params = []){
        return $this->excute(VERIFY_INVOICE.$idOrCode, $params);
    }

    // Update an invoice details on your integration

    public function updateInvoice($code, $fields){
        return $this->excutePut(UPDATE_INVOICE.$code, $fields);
    }
	
  
}

?>