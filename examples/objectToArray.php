<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    $object			= (object)'This is an object';    //For all fields use array('*');
    $results		=	$frontWallet->objectToArray($object);
    //object
    var_dump($results);

    //Yeah you did it!!!
