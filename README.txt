========================================================================================================================
* @author     : Jovitec Technologies Ltd                     						
* @license    : Standard Licence( Regular License )
* @version    : 1.0																	
* @copyright  : JOVITEC TECHNOLOGIES LTD <job@jovi-tec.com | www.jovi-tec.com>
------------------------------------------------------------------------------------------------------------------------

========================================================================================================================
			PHP WALLET CLASS
========================================================================================================================
		PHP abstraction for Wallet Class.

PHP Wallet Class is an easy to integrate class that introduces finance cash flow (Credit & Debit) module in your system. Once incorporated, it creates the capability of your system to be able to:
Receive Money
Withdraw Money
Check account balance
Add funds with different payment gateways
Delete/Edit the money records
Check credit/debit statements.
You can integrate with a good number of PHP frameworks. The class has wise prepared SQL statements that won’t make you to hard code the table columns It comes with three (3) database tables whereby you can replace the user's table with yours and maintain the other two(2).
Methods used
walletRead()
walletSum()
walletTopUp()
walletEdit()
walletDelete()
walletWidthrawal()
walletBalance()
walletStatement()
arrayToObject()
objectToArray()

It comes with three (3) database tables from whereby you can replace the user's table 
with yours and maintain the other two(2).


========================================================================================================================
			REQUIREMENTS
========================================================================================================================
1. PHP 5.5 and above

2. MYSQL 5.x

========================================================================================================================
			INSTALLATION
========================================================================================================================
1. Unzip the Wallet File that you downloaded

2. Copy the unzipped folder in to your system folder.

3. Import the wallet_in & wallet_out tables in your database. {Located in /assets/}

4. You can run some tests after the successful importation of tables {test bed folder is here /examples/}

5. Make sure it works well 

========================================================================================================================
			USAGE
========================================================================================================================
1. If you have your central place where the class files are, deposit the Wallet.php file here too.

2. Make sure you copy the Dbcon.php and place it in the Database directory and 

3. Open the Wallet.php and re-reference the Require_once'...';

4.Test by calling any of the defined methods