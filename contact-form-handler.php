<?php
 $message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != '' ){

     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                    
            //submit the form  
            $userName = $_POST['name'];
            $usereEmail = $_POST['email'];
            $MessageSubject = $_POST['subject'];
            $message = $_POST['message'];


            $to = 'katongoledrake19@gmail.com';
            $body ='';

            $body .='From: '.$userName.'\r\n';
            $body .='Email: '.$usereEmail.'\r\n';
            $body .='From: '.$message.'\r\n';
            
            mail($to,$MessageSubject, $body);

          $message_sent = true;
     }
 


}



