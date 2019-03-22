<?php

	include_once('../model/database.php');
	include_once('uploadimg.php');
	
	if(isset($_POST['submit']) ){
		$course_title = $_POST['course_title'];
		$course_content = $_POST['course_content'];
		$instructor_name = $_POST['instructor_name'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$upload = new ImageUpload();
		$img = $upload->uploadImage('course_image');	

		$req = new Course();
		$req->requestCourse($course_title, $course_content ,$instructor_name,$start_date,$end_date,$img);
        include '../model/Uifunctions.php';
        include '../view/init.php';
                $error = new Uifunctions();
                $msg = "<div class='alert alert-success'> Your Request Sent successfully Please wait for the Admin Confirmation </div>";
                $error->redirectHome($msg, 'back');
	}		

	class Course{

		public function requestCourse($title , $content,
			$instructor_name , $start , $end , $img ){

			$query = "INSERT INTO courses (";
			$query .= " coursetitle , coursecontent , ";
			$query .= " instructorname , coursestart , ";
			$query .= " courseend , courseimg ";
			$query .= " ) VALUES ( ";
			$query .= " '{$title}' , '{$content}' ,";
			$query .= " '{$instructor_name}' , '{$start}' , ";
			$query .= " '$end' , '$img' )";
			
			$db = new MySQLDatabase();
			$escape_query = $db->escapeString($query);
			$result = $db->query($escape_query);

			return $result;
		}

	}











?>