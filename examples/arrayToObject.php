<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet = new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    $array = array('id' => '2', 'amount' => '500.00', 'code' => 'Txn_4545');    //For all fields use array('*');

    $results = $frontWallet->arrayToObject($array);

    //object
    var_dump($results);

    //Yeah you did it!!!
