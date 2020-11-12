<?php
require_once('transactions.php');

echo $transaction->Listtransaction(['perPage' => 4, 'page' => 1]);
