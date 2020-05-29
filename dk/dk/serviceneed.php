<html>
    
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <form action="" method="post">
            <input type="hidden" name="hide" >
        </form>
    </body>
</html>
<?php 

    if(isset($_POST['email'])){
        $to = "manikantakallakuri143@gmail.com";
        $subject = "New Service Request";
        $message = "<h1>Name : ".$_POST['user']."</h1>";
        $message .= "<h1>Emailid : ".$_POST['email']."</h1>";
        $message .= "<h1>Ph.no".$_POST['number']."</h1>";
        $message .= "<h1>Service Need".$_POST['query']."</h1>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         // More headers
        $headers .= 'From: <dk@ricestore.com>' . "\r\n";
        $headers .= 'Cc:dk@ricestore.com' . "\r\n";
        $a = mail($to,$subject,$message,$headers);
        $to1 = "karthikyarramati123@gmail.com";
        $subject1 = "Success";
        $message1 = "<h1>your new request has been sent to our team.Our team will contact you shortly</h1>";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         // More headers
        $headers1 .= 'From: <dk@ricestore.com>' . "\r\n";
        $headers1 .= 'Cc:dk@ricestore.com' . "\r\n";
        $a = mail($to1,$subject1,$message1,$headers1);
    }
    
?>