<?php
include 'init.php';
include '../model/Database.php';


$cxn = new Database('../include/vars.php');
$value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '12:00'", "coursename" ,1 );



?>
<link rel="stylesheet" href="../resources/css/manage_tables.css">
<form method ="post" action ="../Controller/manage_tableController.php">
    <h1 class="text-center">Manage Time Table</h1>
<div class="table-responsive">
	<table class="table table-bordered table-condensed table-striped table-hover">
        <tr>
    <th scope="row">Day/time</th>

    <th>12:00 pm</th>
    <th>01:00 pm</th>
    <th>02:00 pm</th>
    <th>03:00 pm</th>
    <th>04:00 pm</th>
    <th>05:00 pm</th>
    <th>06:00 pm</th>
    <th>07:00 pm</th>
    <th>08:00 pm</th>
    <th>09:00 pm</td>
    <th>10:00 pm</th>
    <th>11:00 pm</th>
    
    </tr>
  <tr>
   
   
    <th >MONDAY</th>
    

    <th scope="row"><input type="text" name="one" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '12:00' ", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></form></th>
    <th><input type="text" name="two" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>" ></th>
    <th><input type="text" name="three" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="four" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="five" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>" ></th>
    <th><input type="text" name="six" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="seven" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="eight" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="nine" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ten" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="eleven" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="twelve" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'MONDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>TUESDAY</th>
    <th><input type="text" name="thirteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="fourteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="fifteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>" ></th>
    <th><input type="text" name="sixteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="seventeen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="eighteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ninteen" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="twenty" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="a" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="b" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="c" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="d" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'TUESDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>WEDENESDAY</th>
    <th><input type="text" name="e" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="f" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="g" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="h" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="i" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="j" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="k" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="l" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="m" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="n" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="o" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="p" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'WEDENESDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>THURSDAY</th>
    <th><input type="text" name="q" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="r" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="s" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="t" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="u" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="v" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="w" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="x" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="y" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="z" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="aa" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ab" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'THURSDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>FRIDAY</th>
    <th><input type="text" name="ac" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ad" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ae" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="af" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ag" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ah" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ai" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="aj" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ak" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="al" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="am" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="an" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'FRIDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>SATURDAY</th>
    <th><input type="text" name="ao" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ap" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="aq" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ar" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="as" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="at" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="au" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="av" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="aw" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="ax" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="ay" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="az" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SATURDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>
    <tr>
    <th>SUNDAY</th>
    <th><input type="text" name="ba" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '12:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bb" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '01:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bc" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '02:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bd" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '03:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="be" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '04:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bf" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '05:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bg" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '06:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bh" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '07:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bi" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '08:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bj" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '09:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></td>
    <th><input type="text" name="bk" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '10:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    <th><input type="text" name="bl" value="<?php $value = $Title->getLatest("*", "timetable WHERE day = 'SUNDAY' AND time = '11:00'", "id" ,1 );
    foreach ($value as  $values) { 
    echo $values['coursename'];
} ?>"></th>
    </tr>

    </table>
</div>


<div class="saving">
    
    <button name="savedata" class="btn btn-primary btn-lg ">save</button>

</div>
</form>
<?php 
include 'footer.php';
 ?>
