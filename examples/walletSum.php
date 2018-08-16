<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $table			= 'wallet_in'; 						//can't be NULL
        $where_values	= array('userId'=>'2'); 			//For For more than one items use array('userId'=>'2','code'=>'Txn_4545');
        $fields_values  = array('amount');					//Focus on the amount field use array('amount');

        $results		=	$frontWallet->walletSum($table, $where_values, $fields_values);
        //Read
        echo(number_format($results,2));
    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!