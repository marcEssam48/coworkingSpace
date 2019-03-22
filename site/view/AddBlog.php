  <?php
    $pageTitle="Add Blog";
include 'init.php';
include 'navbar.php';

?>
    <div class="container">
        <h1 class="text-center">Add Your Own Blog</h1>
	<form class="form-horizontal" enctype="multipart/form-data" action="BlogTest.php" method="POST">
        <div class="form-group form-group-lg">
            <label class="control-label">Title</label>
   			<input class="form-control" type="text" name="title" value="" placeholder="Your blog Title"/><br />
        </div>
        <div class="form-group form-group-lg">
            <label class="control-label">Description</label>
   			<textarea class="form-control" name="desc" cols ="70" rows = "7" placeholder="Your blog Description"></textarea> <br />
        </div>
    	<input class="form-control" type="file" name="upfile" aria-describedby="fileHelp" accept="image/*" />
	   	<br>
	   	<input class=" btn btn-primary btn-lg" type="submit" name="submit" value="Submit"/> 
	</form>
</div>
<?php 
include 'footer.php';
?>