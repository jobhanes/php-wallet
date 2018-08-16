<?php
/**
* #---------------------------------------------------------------------------------------------------#
* # CLASS DBCON																					      #
* #---------------------------------------------------------------------------------------------------#
* @author     : Jovitec Technologies Ltd                     					      #
* @license    : Standard Licence( Regular License on Evanto Market)				      #
* @version    : 1.0																					  #
* @copyright  : JOVITEC TECHNOLOGIES LTD <job@jovi-tec.com | www.jovi-tec.com>			      #
* ----------------------------------------------------------------------------------------------------#
* DEFINITION																						  #
* ----------------------------------------------------------------------------------------------------#
* Connects to the database, it creates secure connection to the database			      #
* Throws the database errors																		  #
* It extends from the Exception class																  #
* ----------------------------------------------------------------------------------------------------#
-----------------------------------------------------------------------------------------------------*/
class DbconException extends Exception {}

class Dbcon
{
	protected $host;
	protected $username;
	protected $database;
	protected $password;

    /**
     * Dbcon constructor.
     */
	public function __construct()
	{
		//Put here your database parameters
		$this->host 	    = "localhost";
		$this->username		= "root";
		$this->password		= "";
		$this->database		= "wallet";
	}

    /**
     * Connects to the database.
     *
     * @return mysqli
     */
	public function databaseConnect()
    {
		try
		{
			$conn = new mysqli($this->host, $this->username, $this->password, $this->database);
			if ($conn->connect_error) {
				throw new DbconException($conn->connect_error);
			}
		}
		catch(DbconException $e)
		{
			die("Connection error occurred : ".$e->getMessage());
		}

	return $conn;
		//It got connection
	}
}
