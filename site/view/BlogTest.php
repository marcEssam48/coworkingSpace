<?php
session_start();
    $pageTitle="Blogs";
if(isset($_SESSION['username'])){
    require_once('../controller/blog.php');
    
   if(isset($_POST['commentsubmit']) ){
        $Blog = new blog();
        $funcblogid = $_POST['blogingid'];
        $funccomment = $_POST['formcomment'];
        $Blog->writeComment(1 , $funcblogid , $funccomment);
    
}

    if(isset($_POST['delete'])){
        $delid = $_POST['blogdelid'];
        $Blog = new blog();
        $Blog->deleteBlog($delid);
    }
?>


<?php 
        $showsearched = FALSE;
    if(isset($_POST['searchsubmit']) && !empty($_POST['blogsearch'])){
        
        $showsearched = TRUE;
        $searchtitle = $_POST['blogsearch'];
        $array = $Blog->searchBlog($searchtitle);
    /*while($row = mysqli_fetch_assoc($array)){
        echo 'title:    ' . $row['title'];
        echo "<br/>";
        echo 'post:     ' . $row['structure'];
        echo "<hr/>";
    }*/
}


include 'init.php';


?>
        <link rel="stylesheet" href="../resources/css/style.css">
        <link rel="stylesheet" href="../resources/css/media.css">
    <?php include 'navbar.php'; ?>      
    <!-- Page Content -->
    <div class="container">

        <div class="row">
              <div class="well text-center">
                    <h4>Add Blog</h4>
                    <a href="AddBlog.php">Write a new blog</a>
                    <!-- /.input-group -->
                </div>

<?php 

        /**
         *
         *@Show user blogs
         *
        */ 
            
           $rightdiv = TRUE;
            $assoc = $Blog->retriveBlogs(1);     
            if($showsearched==TRUE){
                $assoc = $array; 
            }
           while($row = mysqli_fetch_assoc($assoc)){
                $showcomments = $Blog->retriveComment($row['blogid']);  
                $blogid = $row['blogid'];
                $imgpath = $row['imgpath'];
                $title = $row['title'];
            
                                
        ?>      
  
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                
                <!-- Display blog title -->
                <h1>

                    <?php echo "Blog Title: ".$title; ?>

                </h1>
                

                <!-- Author -->
<!--
                <p class="lead">
                    by <a href="#"></a>
                </p>

                <hr>
-->

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on 
	  					<?php echo $row['blogdate']; ?></p>


                <hr>

                <!-- Post Content -->
                <p class="lead">
                    
                 <!-- Display post description -->
                    <?php echo "Blog Content: <br>".$row['structure'];?>
                 
                </p>
               

                <!-- Preview Image -->
                <?php if( $imgpath != '0' ){
                    ?>
                   <img class="img-responsive" src="<?php echo $imgpath ?>" alt="<?php echo $title ; ?>">
                <?php
                    } 
                ?>
                <br>
                 <form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="blogdelid" value="<?php echo $blogid ; ?>" />
                    <input type="submit" name="delete" value="Delete This" class="btn btn-danger "/>
                </form>
                <hr>

             


                <!-- Blog Comments -->
                <h3>Comments: </h3>
                                <?php 
                    while($comments = mysqli_fetch_assoc($showcomments)){

                ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="" alt="">
                    </a>
                    <div class="media-body">
                    <div class="media-body">
                        <?php echo '<h4>'. $comments['blogcomment'] . '</h4>';?>
                        <span class="media-heading">Date: <small><?=$comments['commentdate'];?></small>
                        </span>
                    </div>
                </div>
                <?php } ?>
                


                <!-- Comments Form -->

                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input type="hidden" name="blogingid" value="<?php echo $blogid ; ?>" />
                        <div class="form-group">
                            <textarea class="form-control" name="formcomment" rows="3"></textarea>
                        </div>
                        <input type="submit" name="commentsubmit" class="btn btn-primary" value="submit" />
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->

            </div>
            <?php  
                if($rightdiv){
            ?> 
                            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                       <form method ="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="text" name="blogsearch" class="form-control">
                        <span class="input-group-btn">
                            <input name="searchsubmit" value="search" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

            <!-- Blog Sidebar Widgets Column -->

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Add Blog</h4>
                    <a href="AddBlog.php">Write a new blog</a>
                    <!-- /.input-group -->
                </div>

           

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Feel Free</h4>
                    <p>Make your self at home and express your poinoin in every thing ♥</p>
                </div>

            </div>
            <?php 
                $rightdiv = FALSE;
            }
            ?>
       <?php 
            } 
        ?>

        

        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->

   <!-- start section scroll-->
        <div id="scroll">
            <i class="fa fa-chevron-up fa-3x  hvr-icon-up"></i>
        </div>
        <!-- end section scroll-->
    
    <?php

        include 'footer.php';
}
else 
    header("Location: login.php");
    ?>
