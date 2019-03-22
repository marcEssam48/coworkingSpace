<?php 
	include_once('../model/database.php');
	include_once('../model/Uifunctions.php');
	require '../Mailer/PHPMailerAutoload.php';
	

	if(isset($_POST['submit']) ){
 		$firstname = $_POST['firstname'];
		$lastname  = $_POST['lastname'];
		$email     = $_POST['email'];
		$phone     = $_POST['phone'];
		$message   = $_POST['message']; 
		$subject   = $_POST['subject'];
		$name = $firstname . ' ' . $lastname;
		$form = new contactus();
		$result = $form->saveForms($firstname , $lastname , $email , $phone , $subject , $message);
		
			$form->sendEmail($name , $email , $subject , $message);
	
			echo "<script></script>";
			echo "
            <script type=\"text/javascript\">
            alert('ERORR: Failed To Connect To Internet!!');
            </script>
        ";	

		
	}
	$ui = new Uifunctions();
	$redmsg = "<div class='container alert alert-success'>Thank you for contacting us \n we love you \n Co-Working team@2017 ♥ </div>";

	
	$ui->redirectHome($redmsg , 'localhost/coworking/view/index.php');



	class contactus{

		public function saveForms($firstname , $lastname , $email , $phone , $subject , $message){
		
			$query  = "INSERT INTO contactus ( ";
			$query .= "firstname , lastname , email , ";
			$query .= "phone , subject , message ";
			$query .= ") VALUES ( ";
			$query .= "'{$firstname}' , '{$lastname}' , '{$email}' , ";
			$query .= "'{$phone}' , '{$subject}' , '{$message}' )";

			$db = new MySQLDatabase();
			$resultquery = $db->escapeString($query);
			$result = $db->query($resultquery);

			return $result;
		}

		public function is_connected(){
	      	$response = null;
			system("ping -c 1 google.com", $response);
			if($response == 0)
			{
			    return true;
			}else{
				return false;
			}

		}

		public function sendEmail($name , $email , $subject , $message){

			date_default_timezone_set('Etc/UTC');


			//Create a new PHPMailer instance
			$mail = new PHPMailer;

			//Tell PHPMailer to use SMTP
			$mail->isSMTP();

			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 2;

			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';

			//Set the hostname of the mail server
			$mail->Host = 'smtp.gmail.com';
			// use
			// $mail->Host = gethostbyname('smtp.gmail.com');
			// if your network does not support SMTP over IPv6

			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;

			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';

			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;

			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = "SWEworkingspace@gmail.com";

			//Password to use for SMTP authentication
			$mail->Password = "workingspace";

			//Set who the message is to be sent from
			$mail->setFrom('SWEworkingspace@gmail.com', 'Co-Workingspace Team');

			//Set an alternative reply-to address
			$mail->addReplyTo('SWEworkingspace@gmail.com', 'our team');

			//Set who the message is to be sent to
			$mail->addAddress("{$email}", "{$name}");

			//Set the subject line
			$mail->Subject = "{$subject}";

			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML("Thank you very much for sending us your message \n we hope you are having a good time enjoying our place \n about your {$message} \n we are working on it and will send you back when we finish it \n Co-Workingspace team@2017");

			//Replace the plain text body with one created manually
			$mail->AltBody = "We love you \n Co-Workingspace team@2017";

			//Attach an image file
			//$mail->addAttachment('examples/images/phpmailer_mini.png');

			//send the message, check for errors
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			    echo "Message sent!";
			}
		}
	}



?>