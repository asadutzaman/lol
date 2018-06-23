<?php
 class database {
 	private $hostname      = "localhost";
 	private $databasename  = "vms";
    private $username      = "root" ;
    private $password      = "";
    private $conn;

    public function getconnection()
    {
    	$this->conn=null;

    	try 
    	{
    	 $this->conn = new PDO("mysql:hostname=" . $this->hostname . ";databasename=" . $this->databasename, $this->username, $this->password);	
    	} 
    	catch (PDOException $exception) 
    	{
    		echo "Connection error: " . $exception->getMessage();
    	}
    	return $this->conn;
    }          
 }
?>
