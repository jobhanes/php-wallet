<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $table1			= 'wallet_in'; 										//can't be NULL
        $table2			= 'wallet_out'; 									//can't be NULL
        $where_values	= array('userId'=>'2'); 				  			//For all Rows use empty array as  array();
        $fields_values  = array('id','amount','code');						//For all fields use array('*');

        $results		=	$frontWallet->walletStatement($table1, $table2, $where_values, $fields_values);

        //Read
        //wallet one
        while ($rows1    = mysqli_fetch_row($results['wallet_in']))
        {
            //out put here
            var_dump($rows1);
        }
        //wallet two
        while ($rows2    = mysqli_fetch_row($results['wallet_out']))
        {
            //out put here
            var_dump($rows2);
        }
    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!
