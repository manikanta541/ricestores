  <?php
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
        $to = "karthikyarramati123@gmail.com";
        $subject = "Success";
        $message = "<h1>your order has been success our team will contact you shortly</h1>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         // More headers
        $headers .= 'From: <dk@ricestore.com>' . "\r\n";
        $headers .= 'Cc:dk@ricestore.com' . "\r\n";
        $a = mail($to,$subject,$message,$headers);
        echo $a;
        echo "ok";
    
  
  ?>
  