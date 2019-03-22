<?php
 ob_start();  // output bufeering start 

    session_start();
    

        $pageTitle = 'contact us';
        include 'init.php'; 
?>
         <link rel="stylesheet" href="../resources/css/contact.css">
        <link rel="stylesheet" href="../resources/css/media.css">
 <?php include 'navbar.php'; ?>
<!-- start section contat-->
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="../controller/contactController.php">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                
                                <input id="fname" required="required" name="firstname" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                
                                <input id="lname" required="required" name="lastname" type="text" placeholder="Last Name" class="form-control">
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" required="required"  name="email" type="email" placeholder="Email Address" class="form-control" >
                            </div>
                        </div>  

                        <div class="form-group" >
                            <div class="col-md-10 col-md-offset-1">
                               
                                <input id="phone" required="required"  name="phone" type="tel" placeholder="Phone" class="form-control" max="14">
                            
                            </div>
                        </div>
                        
                        <div class="form-group" >
                            <div class="col-md-10 col-md-offset-1">
                               
                                <input id="Subject" required="required"  name="subject" type="text" placeholder="Subject" class="form-control">
                            
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                
                                <textarea class="form-control" id="message" required="required"  name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        23 Helwan Street  <br />
                         Helwan<br />
                        01114261850<br />
                        info@CoWorking.com<br />
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>



 <!-- start section scroll-->
        <div id="scroll">
            <i class="fa fa-chevron-up fa-3x  hvr-icon-up"></i>
        </div>
        <!-- end section scroll-->
       
<?php

    include 'footer.php';
?>
        