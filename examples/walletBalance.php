<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{

        $table1			= 'wallet_in'; 						//can't be NULL
        $table2			= 'wallet_out'; 					//can't be NULL
        $where_values	= array('userId'=>'2'); 			//For For more than one items use array('userId'=>'2','code'=>'Txn_4545');
        $fields_values  = array('amount');					//Focus on the amount field use array('amount');

        $results		=	$frontWallet->walletBalance($table1,$table2, $where_values, $fields_values);

        //Read
        //If you have your Currency loaded do this:-
        $currency	=	'USD'; //Load this
        echo($currency.' '.$results);

    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!
