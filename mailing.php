<?php
		
         $to = $email;
		 
         $subject = "Project Registered successfully - ".$title;
         
         $message = "<b>Hello ".$name." your project has been registered successfully.</b>";
         $message .= "<b>Any queries please contact us at vic@gmail.com</b>";
         
         $header = "From:saisanjay541@gmail@.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            //echo "Message sent successfully...";
         }else {
            //echo "Message could not be sent...";
         }
      ?>
      
 