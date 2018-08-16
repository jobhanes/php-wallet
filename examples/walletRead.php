<?php
    //Be sure to include the Wallet class in your script
    require_once '../wallet_class/Wallet.php';

    //Instantiate the wallet class
    $frontWallet	= new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    try{
        $table			= 'wallet_out'; 							//can't be NULL
        $where_values	= array('userId'=>'2'); 				  	//For all Rows use empty array as  array();
        $fields_values  = array('id','amount','code');				//For all fields use array('*');

        $results		=	$frontWallet->walletRead($table, $where_values, $fields_values);

        //Read
        while ($rows    = mysqli_fetch_row($results['rows']))
        {
            //out put here
            $row = json_encode($rows);
            echo $row;

        }
    }
    catch (WalletException $e)
    {
        echo "Wallet error : ".$e->getMessage();
    }

    //Yeah you did it!!!