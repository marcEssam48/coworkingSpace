<?php
session_start();
$pageTitle = 'Booking Room';
include 'init.php';


?>
<link rel="stylesheet" href="../resources/css/booking.css">
<?php 
    include 'navbar.php';
        include 'init.php';
if(isset($_SESSION['username'])){?>
   <div class="container">
       <br>
            <h3 class="text-center">Book Your Room NOW!</h3>
            <div class="form">


                <fieldset>
                    <form  class="form-horizontal" method="post" action="../controller/bookingController.php">
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">start time</label>
                            <div class="col-sm-10">
                                <input type="time" name="hours" required max="23:00:00" min="12:00:00" class="form-control">
                             </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">The date you want this room</label>
                            <div class="col-sm-10">
                            <input type="date" name="date" required class="form-control">
                            </div>
                        </div>
                    <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">End time</label>
                            <div class="col-sm-10">
                                <input type="time" name="time" max="23:00:00" min="12:00:00" required class="form-control">
                        </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">The room number</label>
                            <div class="col-sm-10">
                <input type="number" name="roomid" required min="1" max="6" class="form-control">
                            </div>
                        </div>
                <div class="text-center">
                    <h4 >this room costs 50$ per hour</h4>
                    <p>if you want to continue click submit</p>
                    <button name ="reservation"  class="btn btn-primary btn-lg">Submit</button>
                </div>


            </form>
        </fieldset>
        </div>
       </div>
<?php
include 'footer.php';
}
else 
    header("Location: logIn.php");
?>