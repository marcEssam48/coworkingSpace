<?php
class validator{
  
  public function GenrateVerificationCode($vr1, $vr2){
     return substr(md5($vr1.'7sala'.$vr2),20);
	}

    public function hashData($inputData){
    	$inputData = sha1($inputData);
    	return $inputData;
    }

	public function secureData($data){
     if(!empty($data)){
        $con=mysqli_connect("localhost","root","","workingspace");
     	$data = trim(strip_tags(stripslashes(mysqli_real_escape_string($con,$data))));
     	return $data;
     }
	}
  
    public function ContainsNumbers($String){
    if (preg_match("'/^[a-zA-Z\d-*-select-update-delete-insert]+$/'",$String)){ 
    return True; 
    }else{ 
    return False;     
    } 
    } 
}
?>