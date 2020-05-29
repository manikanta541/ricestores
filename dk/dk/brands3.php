<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- links -->
  <title>Ricestores</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">
<style>
    html {
    scroll-behavior: smooth;
  }  
  li>a{
    color:white !important;
}
  </style>
  </head>
  
<body>
    <div class="nav-fix">
    <nav class="navbar navbar-expand-md navbar-light " style="background-color:#1abc9c;color:white">
  <a class="navbar-brand" href="index.html"><img src="img/logo.jpg.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Order now <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="brands1.php">Premium brands</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="brands1.php">Basic brands</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="brands2.php">Deals for functios</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="brands3.php">New service</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.html">Contact us</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
    <div class="container py-5">
      <div class="row">
          <div class="col-md-12">
              <h2 class="text-center mb-2">Services Form</h2>
              <div class="row">
                  <div class="col-md-6 mx-auto">
                      <div class="card border-secondary">
                          <div class="card-header"style="background-color:rgba(192, 192, 192, 0.425)">
                              <h3 class="mb-0 my-2" style="color: black;">Fill this form</h3>
                          </div>
                          <div class="card-body">
                              <form class="form" action="" method="post" role="form" autocomplete="off">
                                  <div class="form-group">
                                      <label for="inputName">Name of your Service you want</label>
                                      <input type="text" class="form-control" name="query" id="service" placeholder="service name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputName">Your name</label>
                                      <input type="text" class="form-control" name="user" id="user" placeholder="full name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputEmail3">Email</label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword3">Phone number</label>
                                      <input type="number" class="form-control" name="number" id="number" placeholder="ph. no." title="At least 6 characters with letters and numbers" required="">
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="remember" id="check" required> my number is correct
                                      <div class="valid-feedback">Valid.</div>
                                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                  </div>
                                  <!-- <div class="form-group">
                                    <select class="form-control" id="sel1" name="sellist1">
                                      <option>daily</option>
                                      <option>every 3 days</option>
                                      <option>weekly</option>
                                      <option>monthly</option>
                                    </select> 
                                  </div> -->
                                  <div class="form-group">
                                      <button type="submit" name="submit" id="sub" class="btn  btn-lg float-right" style="background-color: rgba(192, 192, 192, 0.425);color:black;">Submit</button>
                                  </div>
                              </form>
                              <script>

                                $(document).ready(function()
                                {
                                  $("#sub").click(function()
                                  {
                                    if($.trim($('#user').val()) !=''){

                                        if($.trim($('#service').val()) !=''){
                    
                                            if($.trim($('#email').val()) !=''){
                    
                                                if($.trim($().val('#number')) !=''){
                                                      if($("#check").prop('checked') == true){
                                                            alert("our team received your details. Our team will shortly call you for further details about the service. You can clear your queries in this call.Thank you. Stay hold...☺");
                                                        }
                                                }
                                            }
                                        }
                                    }
                  
                                   else{
                                     alert('Input can not be left blank')
                                    }
                                  })
                                })
                              </script>


                          </div>
                      </div>
                  </div>
              </div>
              <!--/row-->
  
          </div>
          <!--/col-->
      </div>
      <!--/row-->
  </div>
  <!--/container-->
</body>
</html>
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
        $message .= "<h1>Ph.no : ".$_POST['number']."</h1>";
        $message .= "<h1>Service Need : ".$_POST['query']."</h1>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
         // More headers
        $headers .= 'From: <dk@ricestore.com>' . "\r\n";
        $headers .= 'Cc:dk@ricestore.com' . "\r\n";
        $a = mail($to,$subject,$message,$headers);
        $to1 = $_POST['email'];
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