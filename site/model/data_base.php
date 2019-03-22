<?php


class DataBase_Class {

    private $host="localhost";
    private $username="root";
    private $password="";
    private static $instance; 
    private $db_name="workinspace";
    private $database_connection;

    public function __construct() {
      $this->database_connection = $this->database_connect($this->host, $this->username,
      $this->password);
     //$this->database_select($this->db_name);
    }


    public static function getInstance(){// create only one object for databse 
        if(!self::$instance){
            self::$instance= new  self();
        }
        return self::$instance;
    }
   

    public function database_connect($database_host, $database_username, $database_password) {
        if ($c = mysqli_connect($database_host, $database_username, $database_password)) {
           //echo 'database connected successfully';
            return $c;
            
        } else {
                die("Database connection error");
        }
    }
     

    private function database_select($database_name) {
        return mysqli_select_db($database_name, $this->database_connection)
            or die("no db is selecteted");
    }

    public   function database_close() {
        if(!mysql_close($this->database_connection))die ("Connection close failed.");
           
    }
    public function clean($str) {
		$str = trim($str);  
		
                if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str); //Clean any SQL words.
	}


 public function database_query($database_query) {
        
        $query_result = mysql_query($database_query);
        return $query_result;
    }


    public function get_row($query) {
        if (!strstr(strtoupper($query), "LIMIT"))
            $query .= " LIMIT 0,1";
        if (!($res =$this->database_query($query))) {
         die( "Database error: " . mysql_error() . "<br/>In query: " . $query);
        }
        return mysql_fetch_assoc($res);
    }


    public function database_all_array($database_result) {
        $array_return=array();
        while ($row = mysql_fetch_array($database_result)) {
            $array_return[] = $row;
        }
//        if(count($array_return)>0)
        return $array_return;
    }



   public function database_all_assoc($database_result) {

        while ($row = mysql_fetch_assoc($database_result)) {
            $array_return[] = $row;
        }
        return $array_return;
    }

      public   function database_affected_rows($database_result) {

        return mysql_affected_rows($database_result);
    }

     public   function database_num_rows($database_result) {

        return mysql_num_rows($database_result);
    }
    
public function update($table, $data, $where='1'){
    $q="UPDATE `$table` SET ";

    foreach($data as $key=>$val){
        if(strtolower($val)=='null') $q.= "`$key` = NULL, ";
        elseif(strtolower($val)=='now()') $q.= "`$key` = NOW(),";
        else $q.= "`$key`='".$this->escape($val)."', ";
    }

    $q = rtrim($q, ', ') . ' WHERE '.$where.';';

    return $this->query($q);
}

public function check_rows($table, $field, $string){
    $stm1 = "SELECT COUNT(*) FROM `$table` WHERE `$field` = '$string'";
    $result =$this->get_row($stm1);
    return $result['COUNT(*)'];
}
public function insert($table, $data){
    $q="INSERT INTO `$table` ";
    $v=''; $n='';

    foreach($data as $key=>$val){
        $n.="`$key`, ";
        if(strtolower($val)=='null') $v.="NULL, ";
        elseif(strtolower($val)=='now()') $v.="NOW(), ";
        else $v.= "'".$val."', ";
    }

    $q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

    if($this->database_query($q)){
        return mysql_insert_id();
    }
    else return false;

}

}