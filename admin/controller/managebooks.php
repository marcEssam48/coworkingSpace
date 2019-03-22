<?php
include "../model/db.php";
include "../../site/controller/uploadimg.php";
include_once "../view/init.php";

class DataOperation extends Database
{
	// function el insert 3shan a3ml insert lel data fel database
	public function insert_record($table,$fileds){
		
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}
	}
	
	// function de btrg3 el data mn el data base we tzherha 3l sf7a
	public function fetch_record($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
		$array[] = $row;
		}
		return $array;
	}
	 // de select 3shan hst5dmha fel edit bs hya msh sha3'ala
	public function select_record($table,$where){
		$sql = "";
		$condition="";
		foreach ($where as $key => $value){
			$condition.= $key . "='".$value."' AND";
		}
		$condition = substr($condition,0,-5);
		$sql.= "SELECT * FROM " .$table. "WHERE" .$condition;
		$query = mysqli_query ($this->con,$sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}
	
	// de el delete "obviously"
	public function delete_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
		$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if(mysqli_query($this->con,$sql)){
		return true;
		}
	}
}
$obj = new DataOperation;
$upload = new ImageUpload();
if(isset($_FILES['book_image'])){
	$imageloc = $upload->uploadImage('book_image');
	if($imageloc == '0'){
		$ui = new Uifunctions();
		$ui->redirectHome("File Extention Error" , 'back');
		exit(1);
	}
}

if(isset($_FILES['book_pdf'])){
	$pdfloc = $upload->uploadPdf('book_pdf');
	if($pdfloc == '0'){
		$ui = new Uifunctions();
		$ui->redirectHome("File Extention Error" , 'back');
		exit(1);
	}

}


if(isset($_POST["submit"]) )
{
	$myArray = array(
		"bookname" => $_POST["name"],
		"authorname" => $_POST["auth_name"],
		"booktype" => $_POST["gender"] ,
		"bookpdf" => $pdfloc,
		"bookimg" => $imageloc
	);
	
if($obj-> insert_record("books",$myArray)){
	header("location:../view/managebooks.php?msg=Record Inserted");

}
}

if(isset($_GET["delete"])){
$id = $_GET["id"];
$where = array("bookid"=>$id);
if($obj->delete_record("books",$where)){
header("location:../view/managebooks.php?msg=Record Deleted Successfully");
}	
}

?>