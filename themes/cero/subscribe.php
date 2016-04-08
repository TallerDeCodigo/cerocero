<?php


require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php';
$apikey = '1163440eae41407c8e345e24620e1668-us13';
$api = new MCAPI($apikey);
$listid = '1518b034be';
$my_email = 'holkan@tallerdecodigo.com'
 
$merge_vars = array('FNAME'=>'null', 'LNAME'=>'null');
 
/*confirmation e-mail*/
$retval = $api->listSubscribe( $listId, $my_email, $merge_vars );
 
if ($api->errorCode){
	echo "Unable to load listSubscribe()!\n";
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}
?>