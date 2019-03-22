<?php 
	include '../view/init.php';
	require('../model/database.php');

	class blog{

		public function writeBlog($user_id , $title , $structure,$imgpath = ' '){
			global $db;
			$insertion = "INSERT INTO blog (";
			$insertion .=  "userid , title , structure ";
			if($imgpath != ' '){
				$insertion .= " , imgpath, blogdate ) VALUES (";
			}else{
				$insertion .= ") VALUES (";
			}
			$insertion .= "{$user_id} , '{$title}' , '{$structure}' ";
			if($imgpath != ' '){
				$insertion .= ", '{$imgpath}', now() )";
			}else{
				$insertion .= ")";
			}
			$db = new MySQLDatabase();
			$insertion = $db->escapeString($insertion);
			$result = $db->query($insertion);
			
			return $result;		
		}

		public function writeComment($user_id  ,$blog_id , $blogcomment){
			$query = "INSERT INTO comment ( ";
			$query .= " userid , blogcomment , blogid, commentdate ";
			$query .= " ) VALUES ( ";
			$query .= " {$user_id} , '{$blogcomment}' , {$blog_id}, now() )";
			$db = new MySQLDatabase();
			$query = $db->escapeString($query);
			$result = $db->query($query);
			return $result; 
		}



		public function retriveBlogs($user_id){

			global $db;
			$query = "SELECT blogid , title,structure,imgpath, blogdate FROM blog";
			$query .= " ORDER BY blogid DESC ";
			
			$db = new MySQLDatabase();
			$query = $db->escapeString($query);
			$result = $db->query($query);

			return $result;
		}

		public function retriveComment($blog_id){
			$query = "SELECT blogcomment, commentdate FROM comment " ;
			$query .= " WHERE blogid = {$blog_id} ORDER BY commentid ASC" ;
			$db = new MySQLDatabase();	
			$query = $db->escapeString($query);
			$result = $db->query($query);

			return $result;
		}

		public function uploadImage($fileName){
			$loc =  "../resources/images/";
			$loc = $loc . basename($_FILES[$fileName]['name']);

			if(move_uploaded_file($_FILES[$fileName]['tmp_name'], $loc))
				
				return $loc;

			else if(empty($_FILES['upfile']))
				echo "
		            <script type=\"text/javascript\">
			        	alert('Oop sorry we missed your image');
			        </script>
			    ";
			    return '0';    
				
		}
			public function deleteAllComments($blogid){
				
				return $result;
			}


		public function deleteBlog($blogid){
			
			$delete = "DELETE FROM comment ";
			$delete .= "WHERE blogid = $blogid ;";
			$delete .= " DELETE FROM blog ";
			$delete .= "WHERE blogid = $blogid ";
//            $delete = "DELETE  comment , blog FROM comment INNER JOIN blog WHERE comment.blogid = $blogid AND blog.blogid = $blogid";

			$db = new MySQLDatabase();
			$delete = $db->escapeString($delete);
			$result = $db->multi_query($delete);
			
			return $result;
		}

		public function searchBlog($searchtitle){
			$searchblog = "SELECT * FROM blog ";
			$searchblog .= "WHERE title LIKE '{$searchtitle}%' ";
			$db = new MySQLDatabase();
			$searchblog = $db->escapeString($searchblog);
			$result = $db->query($searchblog);
			return $result; 
		}	





	}

	$Blog = new blog();	
?>

<?php
	   
    if (  isset($_FILES['upfile']) && !empty($_FILES['upfile'])){
		$loc = $Blog->uploadImage('upfile');
	}

    if( (empty($_POST['title']) || empty($_POST['desc'])) && isset($_POST['submit']) ) {
    
        $message ="<div class='alert alert-danger'>". "please fill the field" . "</div>";
        $Title->redirectHome($message,'back');
    
    }else if(isset($_POST['submit'])){
        $desc = $_POST["desc"];
        $title = $_POST["title"]; 
        $time = time();   
        $user_id = 1;//from marc
        $Blog->writeBlog($user_id , $title , $desc , $loc);
    }


  

  /* 
   while($row = mysqli_fetch_assoc($assoc)){
   
?>		<h2 style="text-align: center"> <?php echo $row['title']; ?> </h2>
    	<h3 style="text-align: center;color:navy" > <?php echo $row['structure'];?> </h3> <hr />
   	<?php 	if($row['imgpath'] == NULL || $row['imgpath'] == ' ') continue; ?> 	
		<img style = "display: block; margin: 0 auto;" src="<?php echo$row['imgpath']?>" width = "500" height ="500" align= "middle" alt="<?php echo $row['title'] ?> "/>
		
        <hr />
<?php 
    } 
?>

<?php 

/**
 *
 *@Show blog comments
 *
*/ 
/*  
   // $query = "SELECT blogcomment FROM comment WHERE blog_id = $blogid";

require_once('../view/BlogTest.php');

?>
<!-- 
    /*echo $assoc['title'];
    echo $assoc['structure'];
    print_r($assoc);
    */
?>
