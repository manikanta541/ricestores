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
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
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
<html lang="en">
<body>
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
      <div class="container">
  <h2></h2>
  <p></p>
  <form action="" method="POST" >
    <div class="form-group">
      <label for="sel1">Event name:</label>
      <select class="form-control" id="sel1" name="sel1">
        <option>Marriage</option>
        <option>Ceremony</option>
        <option>Party</option>
        <option>annual day</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sel1">Kind of rice:</label>
      <select class="form-control" id="sel2" name="sel2" required>
        <option value="Sonamasuri">Sonamasuri</option>
        <option value="Basumathi">Basumathi</option>
        <option value="Swarna">Swarna</option>
        <option value="PL">PL</option>
        <option value="Brown rice">Brown rice</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sel1">Brand:</label>
      <select class="form-control" id="sel3" name="sel3">
        <option value="Sonamasuri">Lalitha</option>
        <option value="Sonamasuri">Lohitha</option>
        <option value="Sonamasuri">KSN</option>
        <option value="Sonamasuri">777</option>
        <option value="Sonamasuri">Bell</option>
        <option value="Sonamasuri">Kalyani</option>
        
        <option value1="Swarna">Lalitha</option>
        <option value1="Swarna">Lohitha</option>
        <option value1="Swarna">KSN</option>
        <option value1="Swarna">Kesaripistha</option>
        <option value1="Swarna">Nirmalayya</option>
        <option value1="PL">Lalitha</option>
        <option value1="PL">Lohitha</option>
        <option value1="PL">VIP</option>
        <option value1="PL">Kesaripistha</option>
        <option value1="PL">Sunbrand</option>
        <option value1="PL">5 Star</option>
        <option value1="Basumathi">Laitha</option>
        <option value1="Basumathi">Lohitha</option>
        <option value1="Brown rice">India gate</option>
        <option value1="Brown rice">Lohitha</option>
        
        
        
      </select>
    </div>
    <div class="form-group">
       <label for="bags">No.of bags:</label>
       <input type="number" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" placeholder="no.of bags" name="bags" id="bags" required>
    </div>
    <div class="form-group">
       <label for="bags">Your full name:</label>
       <input type="text" class="form-control" placeholder="name" name="user" id="user" required>
    </div>
    <div class="form-group">
       <label for="bags">Email:</label>
       <input type="email" class="form-control" placeholder="email@gmail.com" name="email" id="email" required>
    </div>
    <div class="form-group">
       <label for="bags">Your phone number:</label>
       <input type="number" class="form-control" placeholder="PH.NO" name="number" id="number" title="Error Message" pattern="[1-9]{1}[0-9]{9}" required>
    </div>
   <input type="checkbox"  value="Bike" required>   
   <div class="form-group">
       <label for="address">Your address:</label>
       <input type="text" class="form-control" placeholder="Enter your address" name="address" id="address" required>
    </div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script>
    $(document).ready(function()
    {
      $("#submit").click(function()
              {
                  if($.trim($('#bags').val()) !=''){

                    if($.trim($('#number').val()) !=''){
                    
                    if($.trim($('#email').val()) !=''){
                    
                    if($.trim($('#address').val()) !=''){
                        if($.trim($('#user').val()) !=''){
                            
                      confirm("our team received your details. Our team will shortly call you for further details about the service. You can clear your queries in this call.Thank you. Stay hold...☺");
                    }
                    }
                    }
                    }
                  }
                  
                    else{
                        alert('Input can not be left blank')
                    }
                    
                //   $('input[type="email"]' ).each(function(){
                //       console.log($(this).val());
                //         if($(this).val()!=""){
                //             confirm("ok")
                //         }
                //         else{
                //             alert("not ok")
                //         }
                //   })
                //   $('input[type="number"]').each(function(){
                //       console.log($(this).val());
                //         if($(this).val()!=""){
                //             confirm("ok")
                //         }
                //         else{
                //             confirm("not ok")
                //         }
                //   })
                //   $('input[type="text"]').each(function(){
                //       console.log($(this).val());
                //         if($(this).val()!=""){
                //             confirm("ok")
                //         }
                //         else{
                //             confirm("not ok")
                //         }
                //   })
                // $('input[type="email"]').each(function(){
                //         if($(this).val()!=""){
                //             $('input[type="number"]').each(function(){
                //                 if($(this).val()!=""){
                //                     $('input[type="address"]').each(function(){
                //                         if($(this).val()!=""){
                //                             confirm("our team received your details. Our team will shortly call you for further details about the service. You can clear your queries in this call.Thank you. Stay hold...☺");
                //                          }
                //                          else{
                //                             alert('please fill the required fields')
                //                       }
                //                     });
                //                 }
                //                 else{
                //             alert('please fill the required fields')
                //          }
                //         });
                //         }
                //          else{
                //             alert('please fill the required fields')
                //          }
                //     });
                });
                
    })
   var $sel2 = $( '#sel2' ),
		$sel3 = $( '#sel3' ),
        $options = $sel3.find( 'option' );
        $sel2.on( 'change', function() {
	    $sel3.html( $options.filter( '[value="' + this.value1 + '"]' ) );
        } ).trigger( 'change' );
</script>


  </body>
</body>

</html>
<?php  

    if(isset($_POST['email'])){
        $to = "manikantakallakuri143@gmail.com,manikantakallakuri2000@gmail.com";
        $subject = "Order";
        $message = "<h1>name: ".$_POST['user']."</h1>";
        $message .= "<h1>phone number: ".$_POST['number']."</h1>";
        $message .= "<h1>emailid: ".$_POST['email']."</h1>";
        $message .= "<h1>address: ".$_POST['address']."</h1>";
        $message .= "<h1>Event name: ".$_POST['sel1']."</h1>";
        $message .= "<h1>Kind of rice: ".$_POST['sel2']."</h1>";
        $message .= "<h1>Brand: ".$_POST['sel3']."</h1>";
        $message .= "<h1>No.of bags: ".$_POST['bags']."</h1>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From:'.$_POST['email'] . "\r\n";
        $headers .= 'Cc:'.$_POST['email'] . "\r\n";
        mail($to,$subject,$message,$headers);
        $to1 = $_POST['email'];
        $subject1 = "ordered confirmed";
        $message1 = "your order has been confirmed our team will cantact you shortly";
        $message1 .= "-From DAIVAKRUPA RICESTORES";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers1 .= 'From:manikantakallakuri2000@gmail.com' . "\r\n";
        $headers1 .= 'Cc:'.$_POST['email'] . "\r\n";
        mail($to1,$subject1,$message1,$headers1);
        
    }

?>
