<?php
include '../model/data_base.php';
include '../model/Register.php';


  $db = new DataBase_Class();

    $pageTitle = "Log In | SignUP";
        include 'init.php';?>
        <link rel="stylesheet" href="<?php echo $css; ?>logIn.css"/>
        <link rel="stylesheet" href="<?php echo $css; ?>media.css"/>

        <?php include'navbar.php';?>

        

<!-- start section login-->
        <div class="container">
           
            <header>
                <h1>Login and Registration Form</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="POST" action="../controller/LoginController.php"  autocomplete="on">
                             
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" >  username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>

                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                               
                                <p class="login button"> 
                                    <input type="submit" value="Login"  name="login"/> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  method="POST" action="../controller/LoginController.php"  autocomplete="on" > 
                                <h1> Sign up </h1> 
   
                                <p> 
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                 <p> 
                                    <label for="number" class="phone number"> phone number </label>
                                    <input id="number" name="number" required="required" type="tel" placeholder="eg. 01xxxxxxxxx" max="14"  /> 
                                </p>
                                
                                
                                
                                
                                 <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO "/>
                                </p>
                               
                                <p class="signin button"> 
									
                                    <a href="#tologin" class="to_register"> 
                                    <input type="submit" value="Sign up" name="signUp">
                                    </a>
                                    
                                    
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                            
                            
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
  

 <!-- start section scroll-->
        <div id="scroll">
            <i class="fa fa-chevron-up fa-3x  hvr-icon-up"></i>
        </div>
    <?php 
        include 'footer.php';
    ?>