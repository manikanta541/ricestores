<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/animate.css">
    <style>
      .back-to-top {
      position: fixed;
      bottom: 25px;
      right: 25px;
      z-index: 100;
      opacity: 0.8;
      border-radius: 50%;
      height: 50px;
      width: 50px;
  }
  li>a{
      color:white !important;
  }
  html {
    scroll-behavior: smooth;
  }
  .quantity {
 display: inline-block; }

.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 39px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }


  </style>
  
</head>
<body>
  <a id="back-to-top" href="#" class="btn btn-danger  back-to-top" role="button"><span style='font-size:28px;'>&#8593;</span></a>

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
      <marquee style="color:red">NOTE** : Each bag contains 25kg of rice </marquee>
    <div class="row">
        <div class="col-md-2" >
            <section class="wow fadeInRight p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>Lalitha</h4></li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> lalitha" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input class="span4 input-big"  name="bags" id="lalithabrand"  style="padding:0px;height:30px;width:80px" size="30" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required=" " />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="lalithabrand" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6><input  class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount" readonly="readonly" value="999" name="price" placeholder="price"/></li>
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit" style="background: #d6e23279;"  id="lalitha">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>

            <div class="col-md-2" >
            <section class="wow fadeInLeft p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>VIP</li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> VIP" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="span4 input-big" id="dare_price1" name="bags"  style="padding:0px;height:30px;width:80px" size="30" />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="dare_price1" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6>
                  <input name="price" class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount1" readonly="readonly" value="999" placeholder="price"/>
                  </li>
             
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit" style="background: #d6e23279;"  id="ksn">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>
           <div class="col-md-2" >
            <section class="wow fadeInRight p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>Lohitha</h4></li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> Lohitha" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="span4 input-big" id="dare_price2" name="bags"  style="padding:0px;height:30px;width:80px" size="30" />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="dare_price2" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6><input name="price" class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount2" value="999" readonly="readonly" placeholder="price"/></li>
             
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit" style="background: #d6e23279;"  id="lohitha">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>
        <div class="col-md-2" >
            <section class="wow fadeInLeft p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>Sun brand</h4></li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> sun brand" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="span4 input-big" id="dare_price3" name="bags"  style="padding:0px;height:30px;width:80px" size="30" />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="dare_price3" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6><input name="price" class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount3" value="999" readonly="readonly" placeholder="price"/></li>
             
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit" style="background: #d6e23279;"  id="777">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>
      
            <div class="col-md-2" >
            <section class="wow fadeInRight p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>Kesari Pistha</h4></li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> kesari pistha" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="span4 input-big" id="dare_price4" name="bags"  style="padding:0px;height:30px;width:80px" size="30" />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="dare_price4" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6><input name="price" class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount4" value="999" readonly="readonly" placeholder="price"/>
                  
                  </li>
             
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit" style="background: #d6e23279;"  id="bell">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>
      
            <div class="col-md-2" >
            <section class="wow fadeInLeft p-3" data-wow-duration="0.4s" data-wow-delay="0.5s" style="background-color: rgba(192, 192, 192, 0.425);">
            <div class="shadow bg-silver rounded"> 
              <div class="card mt-3" >
                <img class="card-img-top" src="img/lalitha.jpg" alt="Card image cap">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size:2vw;"><h4>5 Star</h4></li>
                  <!--<li class="list-group-item d-flex">  -->
                  <form class="form" action="msgsub.php" method="post" role="form" autocomplete="off">
                     <input type="hidden" name="brand1" value="PL -> 5 star" />
                    <li class="list-group-item"><h6>no.of bags:</h6>
                    <!--<input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="span4 input-big" id="dare_price5" name="bags"  style="padding:0px;height:30px;width:80px" size="30" />-->
                    <div class="quantity buttons_added">
	                        <input type="button" value="-" class="minus" ><input  name="bags" id="dare_price5" type="number" step="1" min="1" max="" value="1" title="Qty" class="input-text qty text" size="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" readonly="readonly" required=" "><input type="button" value="+" class="plus">
                    </div>
                    </li>
                    
                    <!-- <input type="number"  class="input-sm" id="quantity"  name="quantity"  placeholder="quantity" min="1" style="padding:0px;height:30px;width:80px" > -->
                  <li class="list-group-item"><h6>price:</h6><input name="price" class="span4 input-big" style="padding:0px;height:30px;width:80px" id="total_price_amount5" value="999" readonly="readonly" placeholder="price"/></li>
             
                  
                   <div class="card-body">
                    <button class="btn" type="submit" name="submit"  style="background: #d6e23279;"  id="kalyani">Buy now</button>
                    <!--onclick="fun()-->
                </div>
                  </form>
                   <!--</li>-->
                </ul>

              </div>
            </div>
            </section>
            </div>
</div>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script>
$("#lalithabrand").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
$("#dare_price1").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
$("#dare_price2").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
$("#dare_price3").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
$("#dare_price4").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
$("#dare_price5").on('keyup', function(){
    $(this).val($(this).val().replace(".", ''));
})
  $(document).ready(function()
{
    function updatePrice()
    {
        var price = parseFloat($("#lalithabrand").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount").val(total);
    }
    $(document).on("click","input", "#lalithabrand",updatePrice);
});
$(document).ready(function()
{
    function updatePrice1()
    {
        var price = parseFloat($("#dare_price1").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount1").val(total);
    }
    $(document).on("click","input", "#dare_price1",updatePrice1);
});
$(document).ready(function()
{
    function updatePrice2()
    {
        var price = parseFloat($("#dare_price2").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount2").val(total);
    }
    $(document).on("click","input", "#dare_price2",updatePrice2);
});
$(document).ready(function()
{
    function updatePrice3()
    {
        var price = parseFloat($("#dare_price3").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount3").val(total);
    }
    $(document).on("click","input", "#dare_price3",updatePrice3);
});
$(document).ready(function()
{
    function updatePrice4()
    {
        var price = parseFloat($("#dare_price4").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount4").val(total);
    }
    $(document).on("click","input", "#dare_price4",updatePrice4);
});
$(document).ready(function()
{
    function updatePrice5()
    {
        var price = parseFloat($("#dare_price5").val());
        var total = (price) * 999;
        var total = total.toFixed(2);
        $("#total_price_amount5").val(total);
    }
    $(document).on("click","input", "#dare_price5",updatePrice5);
});
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
<script>
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // POST the field name
        fieldName = $(this).attr('field');
        // POST its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // POST the field name
        fieldName = $(this).attr('field');
        // POST its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
$(document).ready(function()
{
  $("#ksn").click(function(){
     
     window.open('msgsub.php', '_self');
    
  })
    $("#lalitha").click(function(){
    window.open('msgsub.php', '_self');
  })
    $("#lohitha").click(function(){
    window.open('msgsub.php', '_self');
  })
    $("#777").click(function(){
    window.open('msgsub.php', '_self');
  })
    $("#kalyani").click(function(){
    window.open('msgsub.php', '_self');
  })
    $("#bell").click(function(){
    window.open('msgsub.php', '_self');
  })
});
function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});    
          
</script>

  </body>
  
  </html>

  

