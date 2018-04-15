<?php
class Database
{   
    private $servername;
        private $username;
        private $password;
        private $dbname;
        private $charset;
     
    public function dbConnection(){
     
	    $this->servername   =   "localhost";
        $this->username     =   "asadujjaman";
        $this->password     =   "";
        $this->dbname       =   "dblogin";
        $this->charset      =   "utf8mb4";
            
            try{
            
                $dsn    =   "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                $pdo    =   new PDO($dsn,   $this->username,    $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            
            }   catch(PDOException $e){
                echo "Connection Failed".$e->getMessage();
            }
    }
}

?>