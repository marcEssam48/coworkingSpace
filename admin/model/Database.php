<?php

class Database 
{
    private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct($filename)
    {
        if(is_file($filename)) include $filename;
        else throw new Exception("Error!");
        
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database; 
        
        $this->connect();

    }
    
    private function connect()
    {
        
            // PDO
        global $con;
        if($con = new PDO("mysql:dbname=$this->database;host=$this->host", $this->user, $this->password)) {
        }
       else  {
            echo "connection error";
        }
         

         
        
//connect to the server
//        if(!mysql_connect($this->host,$this->user, $this->password))
//            throw new Exception("Error: not connected to the server.");        
//        // select the database
//        if(!mysql_select_db($this->database))
//            throw new Exception("Erro: No database selected");
        //////////////
//    $dsn ='mysql:host=localhost;dbname=workingspace';
//    $user='root';
//    $pass='';
//    $option = array(
//        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//    );
//
//    try {
//        $con = new PDO($dsn, $user,$pass, $option);
//        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     
//    }
// catch (PDOException $e){
//     echo 'failed '. $e->getMessage();
//// }
//    }
    }
    
    function close()
    {
        mysql_close();
    }
}

?>