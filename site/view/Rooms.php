<?php
$pageTitle = 'Rooms';
include 'init.php';


?>
   
        <link rel="stylesheet" href="../resources/css/Rooms.css">
        <link rel="stylesheet" href="../resources/css/media.css">
       <?php  include 'navbar.php'; ?>
        <div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="../resources/images/2.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="../resources/images/6.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="../resources/images/3.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="../resources/images/4.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="../resources/images/5.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="../resources/images/1.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <form id="slide-content" style="display: none;"  method="post" action="../controller/bookingController.php">
                                
                                <div id="slide-content-0">
                                    <h2>Room One</h2>

                                    <p> this room includes</p>
                                    <img src="../resources/images/Projector.png" >                                     
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                    <img src="../resources/images/air-conditioner.png" >                                    
                                     <div class="booking">
                                        <a href="onclickbook.php">
                                     
                                    <button name="one" class="btn btn-default">
                                        Book this room
                                    </button>
                                </a>
                                   
                                </div>
                                </div>
                                

                                <div id="slide-content-1">
                                    <h2>Room Two</h2>
                                    <p> this room includes</p>
                                       <img src="../resources/images/Projector.png" >                              
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                    <img src="../resources/images/table.png" >
                                     <div class="booking">
                                         <a href="onclickbook.php">
                                    <button name="two" class="btn btn-danger">
                                        Book this room
                                    </button>
                                </a>
                                 
                                </div>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Room Three</h2>
                                     <p> this room includes</p>
                                      <img src="../resources/images/computer-screen.png" >                           
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                     <div class="booking" >
                                         <a href="onclickbook.php">
                                    <button name="three" class="btn btn-success">
                                        Book this room
                                    </button>
                                </a>
                                   
                                </div>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Room Four</h2>
                                     <p> this room includes</p>
                                       <img src="../resources/images/Projector.png" >
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                     <div class="booking"  >
                                <a href="onclickbook.php">
                                    <button name="four" class="btn btn-info">
                                        Book this room
                                    </button>
                                </a>
                                    
                                </div>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Room Five</h2>
                                     <p> this room includes</p>
                                       <img src="../resources/images/computer-screen.png" >                            
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                    <img src="../resources/images/air-conditioner.png" >
                                     <div class="booking">
                                    <a href="onclickbook.php">
                                    <button  name ="five" class="btn btn-warning">
                                        Book this room
                                    </button>
                                </a>
                                    
                                </div>
                                </div>

                                <div id="slide-content-5">
                                    <div class="mycontainer">
                                    <h2>Room Six</h2>
                                    <p> this room includes</p>
                                       <img src="../resources/images/Projector.png" >
                                     <img src="../resources/images/Whiteboard-128.png" > 
                                    </div>
                                     <div class="booking" >
                                    <a href="onclickbook.php">
                                    <button name="six" class="btn btn-primary">
                                        Book this room
                                    </button>
                                        </a>
                                    
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="../resources/images/2.jpg"></a>

                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1">
                                    <img src="../resources/images/6.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2">
                                    <img src="../resources/images/3.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3">
                                    <img src="../resources/images/4.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4">
                                    <img src="../resources/images/5.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5">
                                    <img src="../resources/images/1.jpg"></a>
                            </li>
                        </ul> 

                </div>
        </div>
</div>
 <!-- start section scroll-->
        <div id="scroll">
            <i class="fa fa-chevron-up fa-3x  hvr-icon-up"></i>
        </div>

        <!-- end section scroll-->
       <?php

include 'footer.php';
?>