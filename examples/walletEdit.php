<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $date			=	date('Y-m-d',time());
        $time			=   date('Y-m-d H:i:s',time());
        $table			= 	'wallet_in';
        $where_values	=	array('code'=>'Txn_4545');					//Preferably track the code field
        $fields_values  = 	array('userId'	=>rand(1,10),				//The id in user table
                                'amount'	=>rand(9,99999),
                                'code'		=>'Txn_'.rand(999,9999),
                                'reason'	=>'Fee payment',
                                'source'	=>'M-PESA',
                                'person'	=>'Mercy Kinyi',
                                'Identity'	=>'JOB',
                                'date'		=>$date,
                                'time'		=>$time
                                );									//Must have the table required fields & values ;

        $results		=	$frontWallet->walletEdit($table, $where_values, $fields_values);

            //out put here
            var_dump($results);

    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!