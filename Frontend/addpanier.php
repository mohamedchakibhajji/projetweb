<?php


require "_header.php";

	include "Nexmo/src/NexmoMessage.php" ;


	

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('2bd1ee1e','ajJ5lbsLFg6aTD4z');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21626047055', 'Cazasport', 'le produit a ete bien ajouter au panier ' );

	// Step 3: Display an overview of the message
	

	// Done!7
	
 
if (isset($_GET['Referenceproduit'])){
	
	

	$product=$DB->query('SELECT Referenceproduit FROM produit WHERE Referenceproduit=Referenceproduit',array('Referenceproduit'=>$_GET['Referenceproduit']));
	if(empty($product)){
		$json['message'] = "ce produit nexiste pas";
	}
	$panier->add($product[$_GET['Referenceproduit']]->Referenceproduit) ;
	$json['error'] = false;
	 //$nexmo_sms->displayOverview($info);
	}else{
		$json['message'] = "vous n'avez pas selectionne de produit a ajouter au panier";
	
	}
	echo json_encode($json);
