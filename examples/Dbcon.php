<?php
    //Be sure to include the Database class in your script
    require_once "../wallet_class/Wallet.php";

    $frontWallet = new Wallet();

    //Now you are ready to use your wallet, just supply the relevant parameters
    $conn = $frontWallet->databaseConnect();
    if(isset($conn))
    {
        echo("Congratulations! You got connected.");
    }else{
        echo "It did'nt work out ";
    }
        //Yeah you did it!!!