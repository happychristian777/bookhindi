<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

<link rel="stylesheet" href="./style.css">
<style>

.btn {
  display: block;
  background: #bded7d;
  color: white;
  text-decoration: none;
  margin: 20px 0;
  padding: 15px 15px;
  border-radius: 5px;
  position: relative;
}
.btn::after {
  content: '';
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0), 0 3px 3px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}
.btn:hover::after {
  background: rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0.2);
}

/*--------------------
Form
--------------------*/
.form fieldset {
  border: none;
  padding: 0;
  padding: 10px 0;
  position: relative;
  clear: both;
}
.form fieldset.fieldset-expiration {
  float: left;
  width: 60%;
}
.form fieldset.fieldset-expiration .select {
  width: 84px;
  margin-right: 12px;
  float: left;
}
.form fieldset.fieldset-ccv {
  clear: none;
  float: right;
  width: 86px;
}
.form fieldset label {
  display: block;
  text-transform: uppercase;
  font-size: 11px;
  color: rgba(0, 0, 0, 0.6);
  margin-bottom: 5px;
  font-weight: bold;
  font-family: Inconsolata;
}
.form fieldset input,
.form fieldset .select {
  width: 100%;
  height: 38px;
  color: #333333;
  padding: 10px;
  border-radius: 5px;
  font-size: 15px;
  outline: none !important;
  border: 1px solid rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
}
.form fieldset input.input-cart-number,
.form fieldset .select.input-cart-number {
  width: 82px;
  display: inline-block;
  margin-right: 8px;
}
.form fieldset input.input-cart-number:last-child,
.form fieldset .select.input-cart-number:last-child {
  margin-right: 0;
}
.form fieldset .select {
  position: relative;
}
.form fieldset .select::after {
  content: '';
  border-top: 8px solid #222;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  position: absolute;
  z-index: 2;
  top: 14px;
  right: 10px;
  pointer-events: none;
}
.form fieldset .select select {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: absolute;
  padding: 0;
  border: none;
  width: 100%;
  outline: none !important;
  top: 6px;
  left: 6px;
  background: none;
}
.form fieldset .select select :-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}
.form button {
  width: 100%;
  outline: none !important;
  background: -webkit-gradient(linear, left top, left bottom, from(#49a09b), to(#3d8291));
  background: linear-gradient(180deg, #49a09b, #3d8291);
  text-transform: uppercase;
  font-weight: bold;
  border: none;
  box-shadow: none;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  margin-top: 90px;
}
.form button .fa {
  margin-right: 6px;
}

/*--------------------
Checkout
--------------------*/
.checkout {
  margin: 150px auto 30px;
  position: relative;
  width: 460px;
  background: white;
  border-radius: 15px;
  padding: 160px 45px 30px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

/*--------------------
Credit Card
--------------------*/
.credit-card-box {
  -webkit-perspective: 1000;
          perspective: 1000;
  width: 400px;
  height: 280px;
  position: absolute;
  top: -112px;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.credit-card-box:hover .flip, .credit-card-box.hover .flip {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.credit-card-box .front,
.credit-card-box .back {
  width: 400px;
  height: 250px;
  border-radius: 15px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  background: linear-gradient(135deg, #bd6772, #53223f);
  position: absolute;
  color: #fff;
  font-family: Inconsolata;
  top: 0;
  left: 0;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.3);
}
.credit-card-box .front::before,
.credit-card-box .back::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: url("http://cdn.flaticon.com/svg/44/44386.svg") no-repeat center;
  background-size: cover;
  opacity: .05;
}
.credit-card-box .flip {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: relative;
}
.credit-card-box .logo {
  position: absolute;
  top: 9px;
  right: 20px;
  width: 60px;
}
.credit-card-box .logo svg {
  width: 100%;
  height: auto;
  fill: #fff;
}
.credit-card-box .front {
  z-index: 2;
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
}
.credit-card-box .back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.credit-card-box .back .logo {
  top: 185px;
}
.credit-card-box .chip {
  position: absolute;
  width: 60px;
  height: 45px;
  top: 20px;
  left: 20px;
  background: linear-gradient(135deg, #ddccf0 0%, #d1e9f5 44%, #f8ece7 100%);
  border-radius: 8px;
}
.credit-card-box .chip::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  border: 4px solid rgba(128, 128, 128, 0.1);
  width: 80%;
  height: 70%;
  border-radius: 5px;
}
.credit-card-box .strip {
  background: linear-gradient(135deg, #404040, #1a1a1a);
  position: absolute;
  width: 100%;
  height: 50px;
  top: 30px;
  left: 0;
}
.credit-card-box .number {
  position: absolute;
  margin: 0 auto;
  top: 103px;
  left: 19px;
  font-size: 38px;
}
.credit-card-box label {
  font-size: 10px;
  letter-spacing: 1px;
  text-shadow: none;
  text-transform: uppercase;
  font-weight: normal;
  opacity: 0.5;
  display: block;
  margin-bottom: 3px;
}
.credit-card-box .card-holder,
.credit-card-box .card-expiration-date {
  position: absolute;
  margin: 0 auto;
  top: 180px;
  left: 19px;
  font-size: 22px;
  text-transform: capitalize;
}
.credit-card-box .card-expiration-date {
  text-align: right;
  left: auto;
  right: 20px;
}
.credit-card-box .ccv {
  height: 36px;
  background: #fff;
  width: 91%;
  border-radius: 5px;
  top: 110px;
  left: 0;
  right: 0;
  position: absolute;
  margin: 0 auto;
  color: #000;
  text-align: right;
  padding: 10px;
}
.credit-card-box .ccv label {
  margin: -25px 0 14px;
  color: #fff;
}

.the-most {
  position: fixed;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 50vw;
  max-width: 200px;
  padding: 10px;
}
.the-most img {
  max-width: 100%;
}
</style>

    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
    <!-- <script type="text/javascript" src="https:">-->
    <script type="text/javascript">
        //set your publishable key
        Stripe.setPublishableKey('pk_live_51HBIYjGs7gNdeLPLcB8ICZUQFMGPgBBwCceOxQgs04DUD4tiF2MWS2nfW9xaLlfVSYgXWloKbB1eWgJjQqBh4gJi00hsWhgtfs');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");

                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            } 
        }

        //callback to handle the response from stripe
        /*
            if(response.error){
                var form$ = response['id'];
                form$.append("<input type='hodden' name='stripeToken' value='" + token + "' />");
                form$.get(0).submit();
            }
            $('#payBtn').removeAttr("disabled);
        */

        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>
</head>
<body>
<!-- partial:index.partial.html -->
<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

This example is just for fun.
I realized it for the dailyui challenge
https://dailyui.co/

Fork it if you want, it's free, but I apreciate credits or a retweet

Enjoy :)

-->
<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Checkout</span>
		</div>
	</nav>
<div class="checkout">
 <h1>Checkout</h1>
  <form class="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>User/check_mt9" id="paymentFrm" >


  <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
  <input type="hidden" name="item_price" value="<?php echo number_format($item_amount);?>00">

  <label for="card-number">Test Name: <?php echo $item_name;?></label><br>
  <label for="card-number">Total Amount: $<?php echo $item_amount;?></label>
  <fieldset>
      <label for="card-holder">Name </label>
      <input type="text" name="name" value="<?php echo set_value('name'); ?>" id="card-holder" />
    </fieldset>
    <fieldset>
      <label for="card-holder">Email</label>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" id="card-holder" />
    </fieldset>
    <fieldset>
      <label for="card-holder">Card Number</label>
      <input type="text" name="card_num" id="card_num" value="<?php echo set_value('card_num'); ?>" />
    </fieldset>

    <fieldset class="fieldset-expiration">
      <label for="card-expiration-month">Expiration date</label>
      <div class="select">
        <select id="card-expiry-month" name="exp_month" value="<?php echo set_value('exp_month'); ?>">
          <option></option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="select">
        <select id="card-expiry-year" name="exp_year" value="<?php echo set_value('exp_year'); ?>">
          <option></option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="card-ccv">CCV</label>
      <input type="text" id="card-cvc" name="cvc" value="<?php echo set_value('cvc'); ?>" maxlength="3" />
    </fieldset>
    <center>
    <input type="submit"  class="btn" style="background:#2ecc71;" value="Submit">
    <strong></strong>
    </center>
  </form>
</div>

<!-- partial -->
  <script>$('.input-cart-number').on('keyup change', function(){
  $t = $(this);
  
  if ($t.val().length > 3) {
    $t.next().focus();
  }
           
  var card_number = '';
  $('.input-cart-number').each(function(){
    card_number += $(this).val() + ' ';
    if ($(this).val().length == 4) {
      $(this).next().focus();
    }
  })
  
  $('.credit-card-box .number').html(card_number);
});

$('#card-holder').on('keyup change', function(){
  $t = $(this);
  $('.credit-card-box .card-holder div').html($t.val());
});

$('#card-holder').on('keyup change', function(){
  $t = $(this);
  $('.credit-card-box .card-holder div').html($t.val());
});

$('#card-expiration-month, #card-expiration-year').change(function(){
  m = $('#card-expiration-month option').index($('#card-expiration-month option:selected'));
  m = (m < 10) ? '0' + m : m;
  y = $('#card-expiration-year').val().substr(2,2);
  $('.card-expiration-date div').html(m + '/' + y);
})

$('#card-ccv').on('focus', function(){
  $('.credit-card-box').addClass('hover');
}).on('blur', function(){
  $('.credit-card-box').removeClass('hover');
}).on('keyup change', function(){
  $('.ccv div').html($(this).val());
});


/*--------------------
CodePen Tile Preview
--------------------*/
setTimeout(function(){
  $('#card-ccv').focus().delay(1000).queue(function(){
    $(this).blur().dequeue();
  });
}, 500);

/*function getCreditCardType(accountNumber) {
  if (/^5[1-5]/.test(accountNumber)) {
    result = 'mastercard';
  } else if (/^4/.test(accountNumber)) {
    result = 'visa';
  } else if ( /^(5018|5020|5038|6304|6759|676[1-3])/.test(accountNumber)) {
    result = 'maestro';
  } else {
    result = 'unknown'
  }
  return result;
}

$('#card-number').change(function(){
  console.log(getCreditCardType($(this).val()));
})*/</script>

</body>
</html>
