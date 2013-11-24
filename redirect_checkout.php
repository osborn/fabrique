<?php 
	require ('api_conf.php');
	//require ('products.php');
	
	$co = new MPower_Checkout_Invoice();

	$co->addItem('GTP Wax Print', 1, 35, 35);

	$co->setTotalAmount(35);

	

	if($co->create()) {
	  header("Location: ".$co->getInvoiceUrl());
	}else{
	  echo $co->response_text;
	}
 ?>