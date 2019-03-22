<?php

 session_start();
  $pageTitle = 'request course';
        include 'init.php';
if(isset($_SESSION['username'])){
    

      
        ?>
	<link rel="stylesheet" href="../resources/css/instructor.css">
    <link rel="stylesheet" href="../resources/css/media.css">

    <?php include 'navbar.php'; ?>

  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Request course</h1>    
        <form class="form-horizontal" action="../controller/RequestCourseControl.php" enctype="multipart/form-data" method="POST">

        <!-- Start course title field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course Title</label>
          <div class="col-sm-10">
        
            
            <input type="text" name="course_title" class="form-control" autocomplete="off" required="required" />
        
            </div>
        </div>
        <!-- End course title field-->
        <!-- Start course Content field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course Content</label>
          <div class="col-sm-10">
        
                <input type="text" name="course_content" class="form-control" autocomplete="off" required="required" />
        
            </div>
        </div>
        <!-- End course Content field-->
        <!--instructor name  -->
        
                    <input type="hidden" name="instructor_name" value="Muhammad"/>

            <!--instructor name  -->
        <!-- Start course price field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course price</label>
          <div class="col-sm-10">

            <input type="text" name="course_price" class="form-control" autocomplete="off" required="required" />

            </div>
        </div>
        <!-- End course price field-->
        <!-- Start course start date field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course start date</label>
          <div class="col-sm-10">
        
            
            <input type="date" name="start_date" class="form-control" autocomplete="off" required="required" />
        
            </div>
        </div>
        <!-- End course start date field-->
        <!-- Start course end date field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course end date</label>
          <div class="col-sm-10">
        
                <input type="date" name="end_date" class="form-control" autocomplete="off" required="required" />
        
            </div>
        </div>
        <!-- End course end date field-->
        <!-- Start course image field-->
        <div class="form-group form-group-lg">
          <label class="col-sm-2 control-label">Course image</label>
          <div class="col-sm-10">
        
                <input type="file" name="course_image" class="form-control" autocomplete="off" aria-describedby="fileHelp" accept="image/*"  required="required" />
        
            </div>
        </div>
        <!-- End course image field-->
    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg  col-sm-10 col-sm-push-2" /> 
            
      </form>
    </div>
  </div>
  </div> 
    
 

<?php 
        include 'footer.php';
}
else 
    header("Location: logIn.php");
?>