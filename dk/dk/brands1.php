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
    <nav class="navbar navbar-expand-md navbar-light " style="background-color:#1abc9c">
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
<div class="container mt-4">

    <div id="pricing">
    <div class="row">
        <div class="col-md-4 wow fadeInRight mb-4" data-wow-delay="0.3s "  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" >
        <div class="card" style="background-color: rgba(192, 192, 192, 0.425);color: black;">
          <div class="card-body text-center" id="sona">
            <p class="card-text" >Sonamasuri</p>
            <script>
                $(document).ready(function(){
                  $("#sona").click(function(){
                    window.open(href="sonamasuri.php", '_self');
                  });
                });
                </script>
          </div>
    
          
        </div>
        </div>
        <div class="col-md-4 mb-4 wow fadeInLeft" data-wow-delay="0.3s"  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" >
        <div class="card"  style="background-color: rgba(192, 192, 192, 0.425);color: black;">
          <div class="card-body text-center" id="sw">
            <p class="card-text" >Swarna</p>
            <script>
                $(document).ready(function(){
                  $("#sw").click(function(){
                    window.open(href="swarna.php", '_self');
                  });
                });
                </script>
          </div>
        </div>
        </div>
        <div class="col-md-4  mb-4 wow fadeInRight" data-wow-delay="0.3s"  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" >
        <div class="card"  style="background-color: rgba(192, 192, 192, 0.425);color: black;">
          <div class="card-body text-center" id="pl">
            <p class="card-text" >PL</p>
            <script>
                $(document).ready(function(){
                  $("#pl").click(function(){
                    window.open(href="pl.php", '_self');
                  });
                });
                </script>
          </div>
        </div>
        </div>
        <div class="col-md-4  mb-4 wow fadeInLeft" data-wow-delay="0.3s"  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" >
          <div class="card "  style="background-color: rgba(192, 192, 192, 0.425);color: black;">
          <div class="card-body text-center" id="br">
            <p class="card-text" >Brownrice</p>
            <script>
                $(document).ready(function(){
                  $("#br").click(function(){
                    window.open(href="brownrice.php", '_self');
                  });
                });
                </script>
          </div>
        </div> 
      </div> 
        <div class="col-md-4 mb-4 wow fadeInRight" data-wow-delay="0.3s"  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" > 
        <div class="card "  style="background-color: rgba(192, 192, 192, 0.425);color: black;">
          <div class="card-body text-center" id="bs">
            <p class="card-text" >Basumathi</p>
            <script>
                $(document).ready(function(){
                  $("#bs").click(function(){
                    window.open(href="basmathi.php", '_self');
                  });
                });
                </script>
          </div>
        </div>
        </div>
        <div class="col-md-4  mb-4 wow fadeInLeft" data-wow-delay="0.3s"  data-wow-duration="0.8s" data-aos="zoom-in" data-aos-delay="100" >
        <div class="card "  style="background-color:red;color: black;">
          <div class="card-body text-center"  data-toggle="modal" data-target="#myModal">
            <p class="card-text" style="height: 40px;"  >Ask us what the brand you need?? </p>
          </div>
        </div>
        </div>
      </div>
    </div>
     </div>
     <div class="container">
    
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header" >
              <h4 class="modal-title">Write your query</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              We are happy to provide what you need
    
              Please enter the details of what you are wishing to buy/tell us
            </div>
            <form class="needs-validation" action="" method="post" validate>
              <div class="form-group p-2">
                <label for="uname">enter the details:</label>
                <input type="text" class="form-control" id="service" placeholder="Enter what you need" name="query" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group p-2">
                <label for="uname">Your full name:</label>
                <input type="text" class="form-control" id="user" placeholder="your name" name="user" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group p-2">
                <label for="uname">enter your emailid:</label>
                <input type="text" class="form-control" id="email" placeholder="email@gmail.com" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group p-2">
                <label for="pwd">ente your Phone number</label>
                <input type="number" class="form-control" id="number" placeholder="Enter number" name="number" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group form-check ml-2">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" id="check" name="remember" required> my number is correct
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
              </div>
              <button type="submit" class="btn ml-2"  id="sb" style="background-color: #1abc9c;">Submit</button>
              <script>
                  $(document).ready(function()
                  {
                    $("#sb").click(function()
                    {
                        if($.trim($('#service').val()) !=''){
                            if($.trim($('#user').val()) !=''){
                            if($.trim($('#email').val()) !=''){
                                if($.trim($('#number').val()) !=''){
                                    if($.trim($('#check').val()) !=''){
                             confirm("our team received your details. Our team will shortly call you for further details about the service. You can clear your queries in this call.Thank you. Stay hold...☺");
                                }
                            }
                            }
                            }
                            else{
                                alert('input field should not be left ')
                            }
                                  
                    });
                  });
              </script>
            </form>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>


    <script>
    $(document).ready(function(){
        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
    });
  
    </script>
    
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script>
      // Disable form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
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
