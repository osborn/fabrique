<?php 
	require ('api_conf.php');
	//require ('products.php');
	
	$co = new MPower_Checkout_Invoice();

	$co->addItem('Fathia fata Nkrumah', 1, 50, 50);

	$co->setTotalAmount(50);

	

	if($co->create()) {
	  header("Location: ".$co->getInvoiceUrl());
	}else{
	  echo $co->response_text;
	}
 ?>