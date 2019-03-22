<?php

	class ImageUpload{

		public function uploadImage($fileName){
			$allowed =  array('gif','png' ,'jpg' , 'jpeg');
			$file = $_FILES[$fileName]['name'];
			$ext = pathinfo($file, PATHINFO_EXTENSION);
			if(in_array($ext, $allowed) ) {
		  		$loc =  "../../site/resources/images/";
				$loc = $loc . basename($_FILES[$fileName]['name']);
 
			    move_uploaded_file($_FILES[$fileName]['tmp_name'], $loc);
			    return $loc;
			}else{
				return '0';
			}
		}
		public function uploadPdf($fileName){
			$file = $_FILES[$fileName]['name'];
			$ext = pathinfo($file, PATHINFO_EXTENSION);
			if($ext =='pdf' ) {
		  		$loc =  "../../site/resources/pdf/";
				$loc = $loc . basename($_FILES[$fileName]['name']);
 
			    move_uploaded_file($_FILES[$fileName]['tmp_name'], $loc);
			    return $loc;
			}else{
				return '0';
			}

		}	

	}

	$upload = new ImageUpload();


?>