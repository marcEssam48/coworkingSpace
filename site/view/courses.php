<?php
    ob_start();  // output bufeering start 

    session_start();
    if(isset($_SESSION['username'])){

        $pageTitle = 'Courses';
        
        include 'init.php';
        
        ?>
    <link rel="stylesheet" href="../resources/css/star-rating.css" media="all" type="text/css"/>
	<link rel="stylesheet" href="../resources/css/instructor.css">
    <link rel="stylesheet" href="../resources/css/media.css">
    <script src="../resources/js/jquery.min.js"></script>

    <?php 
    include 'navbar.php';
    include '../../admin/model/database.php';
    $cxs = new Database("../include/vars.php");
    include '../model/Uifunctions.php';
        $mydata = new Uifunctions();
        $thedata = $mydata->getLatest('*', 'courses WHERE coursestatus=1', 'courseid');
        if (empty($thedata)){
            echo "<div class='container alert alert-info text-center'> No thing to show </div>";
        }
    foreach ($thedata as $data) {
    ?> 
    
    <article class="container">
		<div class="row">
			<a href="#">
				<div class="col-md-4">
					<img width="350" height="324" src="<?=$data['courseimg'];?>" class="" alt="">	
				</div>
			</a>
			<div class="course-body col-md-8">
				<h1 class="course-title"><?=$data['coursetitle'];?></h1>
				<div class="course-info">
					<p class="lead course-content"><?=$data['coursecontent'];?></p>
                    <?php $rate = $data['courserate']; ?>
                   
				<form action="../controller/rating.php?courseid=<?php echo $data['courseid']; ?>" method="post">
                    <input type="text" class="rating rating-loading"  value="<?=$rate?>" data-size="md" title="">	
                    <input type="number" name="rate" min="0" max="5"
                           oninput="maxLengthCheck(this)" maxlength = "1">
                    <input type="submit" value="Rate This course" class="btn btn-default"/>
				</form>
					<time class="start date">starttime:: <?=$data['coursestart'];?></time><br>
					<time class="end">endtime:: <?=$data['courseend'];?></time><br>
					<span>course prise <?=$data['courseprice'];?> $</span>
					<h2 class="instructor">instructor: <?=$data['instructorname'];?></h2>		
                    <form method="POST" action="../controller/join.php?coursetitle=<?=$data['coursetitle'];?>">
                         <input type="submit" value="Join Course" class="btn btn-primary" name="join"/>
                    </form>
				</div>
			</div>
		</div>
	</article>
<script>
  // This is an old version, for a more recent version look at
  // https://jsfiddle.net/DRSDavidSoft/zb4ft1qq/2/
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<script src="../resources/js/star-rating.js"></script>

    <?php 
    }
        include 'footer.php';
  }
else 
    header("Location: login.php");
    ?>
    <!--  -->