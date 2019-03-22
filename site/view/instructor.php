<?php
    ob_start();  // output bufeering start 

    session_start();
    

        $pageTitle = 'Instructor profile';
        
        include 'init.php';
        ?>
	<link rel="stylesheet" href="../resources/css/instructor.css">
    <link rel="stylesheet" href="../resources/css/media.css">

    <?php include 'navbar.php'; ?> 
    
    <div class="head">
    	
    </div> 

    <!--        start home slider -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
  <!-- Overlay -->
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1  class="wow bounceIn">Co-working space</h1>        
            <h3>Get your next awesome course</h3>
            <br>
        </hgroup>
         <a href="requestcourse.php" class="btn btn-hero btn-lg wow slideOutLeft" >Request Course</a>
        
         <br>
         
      </div>
    </div>    
  </div> 
</div>
<!--        end home slider-->

<?php 
        include 'footer.php';
    	ob_end_flush();
    ?>