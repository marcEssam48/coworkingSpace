<?php 

	class MySQLDatabase{
		private $connection; 

		function __construct(){
			$this->open_connection();
		}
		public function open_connection(){
			$this->connection = mysqli_connect('localhost' , 'root' , '' , 'workingspace');
			if(! $this->connection){
				die("Database connection failed:" . mysqli_error());
			}
		}

		public function close_connection(){
			if(isset($this->connection)){
				mysqli_close($this->connection);
				unset($this->connection);
			}
		}

		public function escapeString($value){
			$value = trim(strip_tags(stripslashes(mysqli_real_escape_string($this->connection,$value))));
			return $value;
		}

		public function query($sql){
			$result = mysqli_query($this->connection , $sql);
			$result = $this->confirm_query($result);
			return $result;
			
		}

		
		public function multi_query($multiquery){
			$result = mysqli_multi_query ( $this->connection , $multiquery );
			$result = $this->confirm_query($result);
			return $result;
		}
		
		private function confirm_query($result){
			if(!$result){
				echo "erroooor";
				return FALSE;
			}
			else 
				return $result ; 	
			
			
		}

		public function fetch_array($result){
			if($result != FALSE)
			return mysqli_fetch_assoc($result);	
		}

	

	}

	$db = new MySQLDatabase();
?>