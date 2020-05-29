

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
  </style>
  </head>
  
<body>
    <div class="nav-fix">
    <nav class="navbar navbar-expand-sm  navbar-fluid  navbar-dark" style="background-color:rgba(192, 192, 192, 0.425)">
      <a class="navbar-brand" href="index.html" tarPOST="_self"><img src="img/logo.jpg.png"></a>
    </nav>
    </div>
    <div class="container py-5">
      <div class="row">
          <div class="col-md-12">
              <h2 class="text-center mb-2">fill this form</h2>
              <div class="row">
                  <div class="col-md-6 mx-auto">
                      <div class="card border-secondary">
                          <div class="card-header"style="background-color:rgba(192, 192, 192, 0.425)">
                              <h3 class="mb-0 my-2" style="color: black;">Fill this form</h3>
                          </div>
                          <div class="card-body">
                              <form  class="form" action="" method="POST" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputText3">Name</label>
                                    <input type="text" name="user" class="form-control" id="inputEmail3" placeholder="your name" required="">
                                </div>
                                  <div class="form-group">
                                      <label for="inputEmail3">Email</label>
                                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword3">Phone number</label>
                                      <input type="number" name="number" class="form-control" id="inputPassword3" placeholder="ph. no." title="At least 6 characters with letters and numbers" required="">
                                  </div>
                                    <div class="form-group">
                                      <input type="hidden" name="bags1" value="<?php echo $_POST['bags']; ?>"  class="form-control" id="inputPassword3" placeholder="" title="At least 6 characters with letters and numbers" required="">
                                  </div>
                                  <div class="form-group">
                                      <input type="hidden" name="brand" value="<?php echo $_POST['brand1']; ?>"  class="form-control" id="inputPassword3" placeholder="" title="At least 6 characters with letters and numbers" required="">
                                  </div>
                                    <div class="form-group">
                                      <label for="inputPassword3">Phone number</label>
                                      <input type="hidden" name="bags1" value="<?php echo $_POST['bags']; ?>"  class="form-control" id="inputPassword3" placeholder="" title="At least 6 characters with letters and numbers" required="">
                                  </div>
                                    <div class="form-group">
                                      <input type="hidden" name="price1" class="form-control" id="inputprice3" placeholder="" value="<?php echo $_POST['price']; ?>" required="">
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="remember" required> my number is correct
                                      <div class="valid-feedback">Valid.</div>
                                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                  </div>
                                    <div class="form-group">
                                    <label for="inputText3">address</label>
                                    <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="your address" required="">
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
                                      <button name="submit" type="submit" id="sub" class="btn  btn-lg float-right" style="background-color: rgba(192, 192, 192, 0.425);color: black;">Submit</button>
                                  </div>
                              </form>
                              <script>
                                $(document).ready(function()
                                {
                                  $("#sub").click(function()
                                  {
                                    $('input[type="email"]').each(function(){
                                        $('input[type="number"]').each(function(){
                                        if ($("input[type=checkbox]").is(":checked")) { 
                                        if($(this).val()!=""){
                                            alert("our team received your details. Our team will shortly call you for further details about the service. You can clear your queries in this call.Thank you. Stay hold...☺");
                                        }
                                        }
                                        });
                                    });
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

<?php
if(isset($_POST['email'])){

        $to = "manikantakallakuri143@gmail.com,manikantakallakuri2000@gmail.com";
        $subject = "Order";
        $message = "<h1>name: ".$_POST['user']."</h1>";
        $message .= "<h1>phone number: ".$_POST['number']."</h1>";
        $message .= "<h1>emailid: ".$_POST['email']."</h1>";
        $message .= "<h1>selected brand: ".$_POST['brand']."</h1>";
        $message .= "<h1>no.of bags: ".$_POST['bags1']."</h1>";
        $message .= "<h1>price: ".$_POST['price1']."</h1>";
        $message .= "<h1>address: ".$_POST['address']."</h1>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From:'.$_POST['email'] . "\r\n";
        $headers .= 'Cc:'.$_POST['email'] . "\r\n";
        mail($to,$subject,$message,$headers);
        $to1 = $_POST['email'];
        $subject1 = "ordered confirmed";
        $message1 = "your order has been confirmed our team will cantact you shortly";
        $message .= "<h1>phone number:".$_POST['number']."</h1>";
        $message .= "<h1>email id:".$_POST['email']."</h1>";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers1 .= 'From:manikantakallakuri2000@gmail.com' . "\r\n";
        $headers .= 'Cc:'.$_POST['email'] . "\r\n";
        mail($to1,$subject1,$message1,$headers1);
 
    }

?>
