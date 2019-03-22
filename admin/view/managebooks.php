
<?php

include "../controller/managebooks.php";

?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Your Website</title>
<link rel="stylesheet" href="" type="text/css" />
<script type="text/javascript"></script>
</head>

<body>


	<div class = "container">
		<div class = "jumbotron">
			<h1> Books <small>editor</small> </h1>
		</div>
	</div>
	<div class= "container">
		<div class= "row">
			<div class = "col-md-3"></div>
			<div class = "col-md-6">
			<div class = "panel panel-primary">
			<div class = "panel-heading"> Enter Book Details</div>
			<div class = "panel-body">
				<form enctype="multipart/form-data" method= "post" action= "../controller/managebooks.php">
					<table class= "table table-hover">
						<tr>
							<td>Book Name</td>
							<td><input required="required" type= "text" class= "form-control" name= "name" placeholder= "Enter Book Name" </td>
						</tr>
						<tr>
							<td>Author Name</td>
							<td><input required="required" type= "text" class= "form-control" name= "auth_name" placeholder= "Enter Author Name" </td>
						</tr>
						<tr>
							<td>Book Gender</td>
							<td><input required="required"  type= "text" class= "form-control" name= "gender" placeholder= "Enter Book Gender" </td>
						</tr>

						<tr>
							<td>BooK PDF</td>
							<td colspan= "2" align= "center">

							<input required="required" type= "file"  name= "book_pdf" />
							</td>
						</tr>

						<tr>
							<td>BooK Image</td>
							<td colspan= "2" align= "center">

							<input required="required" type= "file"  name= "book_image" /> 
							</td>
						</tr>

						
					</table>

							<input type= "submit" class= "btn btn-primary" name= "submit" value= "Add" />
			
				</form>
			</div>
		</div>
			</div>
			<div class = "col-md-3"></div>
		</div>
		
	</div>
	<div class= "container">
		<div class= "row">
			<div class= "col-md-2"></div>
			<div class= "col-md-8">
				<table class= "table table-bordered">
					<tr>
						<td>#</td>
						<td>Book Name</td>
						<td>Author Name</td>
						<td>Gender</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<?php
						$myrow = $obj-> fetch_record("books");
						foreach($myrow as $row){
						?>
							<tr>
								<td><?php echo $row["bookid"]; ?></td>
								<td><?php echo $row["bookname"]; ?></td>
								<td><?php echo $row["authorname"]; ?></td>
								<td><?php echo $row["booktype"]; ?></td>
								<td><a href= "managebooks.php?update=1&id=<?php echo $row["bookid"]; ?>" class= "btn btn-info">Edit</a></td>
								<td><a href= "../controller/managebooks.php?delete=1&id=<?php echo $row["bookid"]; ?>" class= "btn btn-danger">Delete</a></td>
							</tr>
						<?php
						}
					?>
					
				</table>
			</div>
			<div class= "col-md-2"></div>
		</div>
	</div>
</body>
</html>
