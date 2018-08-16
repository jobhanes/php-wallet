<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $table			= 	'wallet_in';
        $where_values	=	array('code'=>'Txn_4545');						//specify one array

        $results		=	$frontWallet->walletDelete($table, $where_values);


            //out put here
            var_dump($results);

    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!
