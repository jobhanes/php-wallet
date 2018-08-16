<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    $frontWallet	= new Wallet();


    //Now you are ready to use your wallet, just supply the relevant parameters

    try{
        $date	=	date('Y-m-d',time());
        $time	=   date('Y-m-d H:i:s',time());
        $table			= 'wallet_in'; 									//can't be NULL
        $fields_values  = array('userId'	=>'3',
                                'amount'	=>rand(9,99999),			//float
                                'code'		=>'Txn_'.rand(999,9999),	//make sure its unique
                                'reason'	=>'Fee payment',
                                'source'	=>'M-PESA',
                                'person'	=>'Mercy Kinyi',
                                'Identity'	=>'JOB',
                                'date'		=>$date,
                                'time'		=>$time
                                );

        $results		=	$frontWallet->walletTopUp($table, $fields_values);

            //out put here
          	$result = json_encode($results);
          	echo $result;


    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!
