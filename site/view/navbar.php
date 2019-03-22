</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">	
  
	<div class="navbar-header">
        <div class="navbar-header"><a class="navbar-brand" href="index.php">Working Space</a></div>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	

	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav pull-right">
            <?php  if(isset($_SESSION['username']))
                { ?>
                     <li><a href="../view/profile.php"><span class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
                      <li><a href="student.php"><span class="glyphicon glyphicon-lock"></span> student</a></li>
                          <li><a href="instructor.php"><span class="glyphicon glyphicon-pencil"></span> instructor</a></li>
                    
                          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>

                    
              <?php } else  {
                ?>
	<li><a href="logIn.php"><span class="glyphicon glyphicon-log-in"></span> Login | Sign Up </a></li>
    
		<?php } ?>
		</ul>
	

			
		
   
	</div>
</div>
<div class="navbar navbar-inverse navbar-fixed text-center" role="navigation">	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	
	<div class="collapse navbar-collapse secNav   ">
		
		<ul class="nav navbar-nav">
			<li ><a href="index.php">Home</a></li>
        <li><a href="index.php#about" class="navabout">About</a></li>
        <li><a href="BlogTest.php">Blogs</a></li>
        <li><a href="contact.php">contact</a></li>
          <li><a href="courses.php">Courses</a></li>
             <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tour <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Rooms.php">Rooms</a></li>
          <li><a href="index.php#Benefits" class="navben">Benefits</a></li>
            <li><a href="timetable.php">TimeTable</a></li>
            <li><a href="library.php">library</a></li>
        </ul>
      </li>
		</ul>
<!--		<button type="button" class="btn btn-default navbar-btn">Button</button>-->
		
		
	</div>
</div>



<!--    end nav bar-->