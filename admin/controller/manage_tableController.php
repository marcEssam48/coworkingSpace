<?php
include '../model/Uifunctions.php';
include '../view/init.php';
     

$con = mysqli_connect("localhost","root","","workingspace");
$redirect = new Uifunctions();
$theMsg = '<div class ="alert alert-success">You will be deirected home in </div>';
$coursename;

if(isset($_POST['savedata'])){
if (isset($_POST['one'])){
	$day = "MONDAY";
	$time="12:00";
	$coursename =$_POST['one'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['two'])){
	$day = "MONDAY";
	$time="01:00";
	$coursename =$_POST['two'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['three'])){
	$day = "MONDAY";
	$time="02:00";
	$coursename =$_POST['three'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['four'])){
	$day = "MONDAY";
	$time="03:00";
	$coursename =$_POST['four'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['five'])){
	$day = "MONDAY";
	$time="04:00";
	$coursename =$_POST['five'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['six'])){
	$day = "MONDAY";
	$time="05:00";
	$coursename =$_POST['six'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['seven'])){
	$day = "MONDAY";
	$time="06:00";
	$coursename =$_POST['seven'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['eight'])){
	$day = "MONDAY";
	$time="07:00";
	$coursename =$_POST['eight'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['nine'])){
	$day = "MONDAY";
	$time="08:00";
	$coursename =$_POST['nine'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ten'])){
	$day = "MONDAY";
	$time="09:00";
	$coursename =$_POST['ten'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['eleven'])){
	$day = "MONDAY";
	$time="10:00";
	$coursename =$_POST['eleven'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['twelve'])){
	$day = "MONDAY";
	$time="11:00";
	$coursename =$_POST['twelve'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['thirteen'])){
	$day = "TUESDAY";
	$time="12:00";
	$coursename =$_POST['thirteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['fourteen'])){
	$day = "TUESDAY";
	$time="01:00";
	$coursename =$_POST['fourteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['fifteen'])){
	$day = "TUESDAY";
	$time="02:00";
	$coursename =$_POST['fifteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['sixteen'])){
	$day = "TUESDAY";
	$time="03:00";
	$coursename =$_POST['sixteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['seventeen'])){
	$day = "TUESDAY";
	$time="04:00";
	$coursename =$_POST['seventeen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['eighteen'])){
	$day = "TUESDAY";
	$time="05:00";
	$coursename =$_POST['eighteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ninteen'])){
	$day = "TUESDAY";
	$time="06:00";
	$coursename =$_POST['ninteen'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['twenty'])){
	$day = "TUESDAY";
	$time="07:00";
	$coursename =$_POST['twenty'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['a'])){
	$day = "TUESDAY";
	$time="08:00";
	$coursename =$_POST['a'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['b'])){
	$day = "TUESDAY";
	$time="09:00";
	$coursename =$_POST['b'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['c'])){
	$day = "TUESDAY";
	$time="10:00";
	$coursename =$_POST['c'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['d'])){
	$day = "TUESDAY";
	$time="11:00";
	$coursename =$_POST['d'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['e'])){
	$day = "WEDENESDAY";
	$time="12:00";
	$coursename =$_POST['e'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['f'])){
	$day = "WEDENESDAY";
	$time="01:00";
	$coursename =$_POST['f'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['g'])){
	$day = "WEDENESDAY";
	$time="02:00";
	$coursename =$_POST['g'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['h'])){
	$day = "WEDENESDAY";
	$time="03:00";
	$coursename =$_POST['h'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['i'])){
	$day = "WEDENESDAY";
	$time="04:00";
	$coursename =$_POST['i'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['j'])){
	$day = "WEDENESDAY";
	$time="05:00";
	$coursename =$_POST['j'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['k'])){
	$day = "WEDENESDAY";
	$time="06:00";
	$coursename =$_POST['k'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['l'])){
	$day = "WEDENESDAY";
	$time="07:00";
	$coursename =$_POST['l'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['m'])){
	$day = "WEDENESDAY";
	$time="08:00";
	$coursename =$_POST['m'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['n'])){
	$day = "WEDENESDAY";
	$time="09:00";
	$coursename =$_POST['n'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['o'])){
	$day = "WEDENESDAY";
	$time="10:00";
	$coursename =$_POST['o'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['p'])){
	$day = "WEDENESDAY";
	$time="11:00";
	$coursename =$_POST['p'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['q'])){
	$day = "THURSDAY";
	$time="12:00";
	$coursename =$_POST['q'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['r'])){
	$day = "THURSDAY";
	$time="01:00";
	$coursename =$_POST['r'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['s'])){
	$day = "THURSDAY";
	$time="02:00";
	$coursename =$_POST['s'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['t'])){
	$day = "THURSDAY";
	$time="03:00";
	$coursename =$_POST['t'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['u'])){
	$day = "THURSDAY";
	$time="04:00";
	$coursename =$_POST['u'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['v'])){
	$day = "THURSDAY";
	$time="05:00";
	$coursename =$_POST['v'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['w'])){
	$day = "THURSDAY";
	$time="06:00";
	$coursename =$_POST['w'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['x'])){
	$day = "THURSDAY";
	$time="07:00";
	$coursename =$_POST['x'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['y'])){
	$day = "THURSDAY";
	$time="08:00";
	$coursename =$_POST['y'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['z'])){
	$day = "THURSDAY";
	$time="09:00";
	$coursename =$_POST['z'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['aa'])){
	$day = "THURSDAY";
	$time="10:00";
	$coursename =$_POST['aa'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ab'])){
	$day = "THURSDAY";
	$time="11:00";
	$coursename =$_POST['ab'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ac'])){
	$day = "FRIDAY";
	$time="12:00";
	$coursename =$_POST['ac'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ad'])){
	$day = "FRIDAY";
	$time="01:00";
	$coursename =$_POST['ad'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ae'])){
	$day = "FRIDAY";
	$time="02:00";
	$coursename =$_POST['ae'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['af'])){
	$day = "FRIDAY";
	$time="03:00";
	$coursename =$_POST['af'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ag'])){
	$day = "FRIDAY";
	$time="04:00";
	$coursename =$_POST['ag'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ah'])){
	$day = "FRIDAY";
	$time="05:00";
	$coursename =$_POST['ah'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ai'])){
	$day = "FRIDAY";
	$time="06:00";
	$coursename =$_POST['ai'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['aj'])){
	$day = "FRIDAY";
	$time="07:00";
	$coursename =$_POST['aj'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ak'])){
	$day = "FRIDAY";
	$time="08:00";
	$coursename =$_POST['ak'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['al'])){
	$day = "FRIDAY";
	$time="09:00";
	$coursename =$_POST['al'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['am'])){
	$day = "FRIDAY";
	$time="10:00";
	$coursename =$_POST['am'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['an'])){
	$day = "FRIDAY";
	$time="11:00";
	$coursename =$_POST['an'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ao'])){
	$day = "SATURDAY";
	$time="12:00";
	$coursename =$_POST['ao'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ap'])){
	$day = "SATURDAY";
	$time="01:00";
	$coursename =$_POST['ap'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['aq'])){
	$day = "SATURDAY";
	$time="02:00";
	$coursename =$_POST['aq'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ar'])){
	$day = "SATURDAY";
	$time="03:00";
	$coursename =$_POST['ar'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['as'])){
	$day = "SATURDAY";
	$time="04:00";
	$coursename =$_POST['as'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['at'])){
	$day = "SATURDAY";
	$time="05:00";
	$coursename =$_POST['at'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['au'])){
	$day = "SATURDAY";
	$time="06:00";
	$coursename =$_POST['au'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['av'])){
	$day = "SATURDAY";
	$time="07:00";
	$coursename =$_POST['av'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['aw'])){
	$day = "SATURDAY";
	$time="08:00";
	$coursename =$_POST['aw'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ax'])){
	$day = "SATURDAY";
	$time="09:00";
	$coursename =$_POST['ax'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ay'])){
	$day = "SATURDAY";
	$time="10:00";
	$coursename =$_POST['ay'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['az'])){
	$day = "SATURDAY";
	$time="11:00";
	$coursename =$_POST['az'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['ba'])){
	$day = "SUNDAY";
	$time="12:00";
	$coursename =$_POST['ba'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bb'])){
	$day = "SUNDAY";
	$time="01:00";
	$coursename =$_POST['bb'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bc'])){
	$day = "SUNDAY";
	$time="02:00";
	$coursename =$_POST['bc'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bd'])){
	$day = "SUNDAY";
	$time="03:00";
	$coursename =$_POST['bd'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['be'])){
	$day = "SUNDAY";
	$time="04:00";
	$coursename =$_POST['be'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bf'])){
	$day = "SUNDAY";
	$time="05:00";
	$coursename =$_POST['bf'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bg'])){
	$day = "SUNDAY";
	$time="06:00";
	$coursename =$_POST['bg'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bh'])){
	$day = "SUNDAY";
	$time="07:00";
	$coursename =$_POST['bh'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bi'])){
	$day = "SUNDAY";
	$time="08:00";
	$coursename =$_POST['bi'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bj'])){
	$day = "SUNDAY";
	$time="09:00";
	$coursename =$_POST['bj'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bk'])){
	$day = "SUNDAY";
	$time="10:00";
	$coursename =$_POST['bk'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}
if(isset($_POST['savedata'])){
if (isset($_POST['bl'])){
	$day = "SUNDAY";
	$time="11:00";
	$coursename =$_POST['bl'];
	$query = "INSERT INTO timetable (`id`,`day`,`time`,`coursename`) VALUES ('','$day','$time','$coursename')";
	$sql = mysqli_query($con,$query);
	}
}

if($sql){
	$redirect->redirectHome($theMsg, 'back') ;
}
else{
	echo "you are not connected";
}


    
?>