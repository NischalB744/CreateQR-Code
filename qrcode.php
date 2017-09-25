<?php

	use Endroid\QrCode\QrCode;

	require_once 'vendor/autoload.php';

	$itemNum = $_POST['itemNumber'];
	$lotNum = $_POST['lotNumber'];
	$expDate = $_POST['expiryDate'];
	$batchNum = $_POST['batchNumber'];


    $qrData = $itemNum.",".$lotNum.",".$expDate.",".$batchNum;
     
    $qr = new QrCode($qrData);

	$qr->setSize(100);

    $qr->setPadding(10);

    $qr->render();



?>