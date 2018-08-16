<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $date			=	date('Y-m-d',time());
        $time			=   date('Y-m-d H:i:s',time());
        $table			= 	'wallet_out'; 								//target cash flow out table e.g wallet_out
        $fields_values  = array('userId'	=>  rand(1,9),
                                'amount'	=>  rand(99,9999),
                                'code'		=>  'Txn_'.rand(999,9999) ,	//Must be unique for every transaction
                                'reason'	=>  'Food payment',
                                'source'	=>  'M-PESA',
                                'person'	=>  'Mercy Kinyi',
                                'Identity'	=>  'JOB',
                                'date'		=>  $date,
                                'time'		=>  $time
                                );

        $results		=	$frontWallet->walletWidthrawal($table, $fields_values);

            //out put here
            var_dump($results);

    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!
