<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct(){
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	
	public function runQuery($sql){
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	
	public function register($uname,$umail,$upass){
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(
															user_name,
																user_email,
																	user_pass
														) 
		                                            	VALUES(
		                                               		:uname, 
		                                               			:umail, 
		                                               				:upass
		                                               		)"
		                                );
												  
			$stmt->bindparam(":uname", $uname);
			$stmt->bindparam(":umail", $umail);
			$stmt->bindparam(":upass", $new_password);
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	/***********************************AI**************************************/
    //																				
	//			Fixed function																	
	//			insert																					
	//			select																						
	//**************************************************************************/
	/**********************************AI***************************************/
	public function insert($table_name, $data){ 								
            //QUERY BULDING DONE
            $fields = '`' . implode('`,`', array_keys($data)) . '`';
            $values = ":".implode(",:",array_keys($data));
            $sql = "INSERT INTO {$table_name} ($fields) VALUES($values)";

            
            $row    = $this->conn->prepare($sql);
            
            foreach($data as $Name => $Value){
                $row->bindValue(':'.$Name, $Value);
            }
            return $row->execute();
            
        }
	/***********************************AI**************************************/
	/***********************************AI**************************************/
		public function select($table_name, $order_by){

            $string =   "SELECT * FROM ".$table_name." ORDER BY ".$order_by." DESC ";
            $stmt   =   $this->conn->query($string)->fetchAll(PDO::FETCH_ASSOC);
            return $stmt;
            
        }
    /***********************************AI**************************************/
    /***********************************AI**************************************/
    //																				
	//			Login system																	
	//																								
	//																									
	//**************************************************************************/
	public function do_login($uname,$umail,$upass){
		try{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1){
				
				if($userRow['user_pass']==$upass){
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	
	public function is_loggedin(){
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	
		
	}
	
	public function redirect($url){
		header("Location: $url");
	}
	
	public function doLogout(){
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
	/***********************************AI**************************************/
    //																				
	//																				
	//																								
	//																									
	//**************************************************************************/
	 public function delete($table_name, $where_condition)  
      {  
           $condition = '';  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
                /*This code will convert array to string like this-  
                input - array(  
                     'id'     =>     '5'  
                )  
                output = id = '5'*/  
                $condition = substr($condition, 0, -5);  
                $query = "DELETE FROM ".$table_name." WHERE ".$condition."";  
                if(mysqli_query($this->con, $query))  
                {  
                     return true;  
                }  
           }  
      }
      
      
      
    	public function select_byid($table_name,$id){
            
            $string =   "SELECT * FROM ".$table_name." WHERE id=:id";
            $stmt   =   $this->conn->query($string)->fetchAll(PDO::FETCH_ASSOC); 
            return $stmt;
            
        }
        
        public function getById($table, $id){

			 $sql="SELECT * FROM $table WHERE id = $id";
			
			 $q = $this->conn->query($sql);
			 $data = $q->fetchAll(PDO::FETCH_ASSOC);
			 return $data;
		}
	
	
}
?>