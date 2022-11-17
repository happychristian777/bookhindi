<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/payment/style.css">
</head>
<body>
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
    </script><br>
<!-- partial:index.partial.html -->
<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Checkout</span>
		</div>
	</nav>
  <br>
<div class='container1'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
                <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
                  </td>
              <td>
                <br> <span class='thin'>Gujarati Mock Test</span>
                <br> <br> <span class='thin small'> <b>what you get: </b>
                <br><i class="fas fa-check"></i> Exam repeated important words and phrases<br></span>
                <br><i class="fas fa-check"></i> Practice Material 1<br></span>
                <br><i class="fas fa-check"></i> Practice Material 2<br></span>
                <br><i class="fas fa-check"></i> Practice Material 3<br></span>
                <br><i class="fas fa-check"></i> Mock Test - 1<br></span>
                <br><i class="fas fa-check"></i> Mock Test - 2<br></span>
                <br><i class="fas fa-check"></i> Mock test -3<br></span>
              </td>

            </tr>
            <tr>

              <td>


              </td>
            </tr>
          </tbody>

        </table>

        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>


            TOTAL
          </span>
          <span style='float:right; text-align:right;'>

          $<?php echo $item_amount;?>
          </span>
        </div>
      </div>
      </div>
        <div class='credit-info'>
          <div class='credit-info-content'>

            <img src='<?php echo base_url();?>assets/payment1.png'  style="height: 150px;width: 180px;" class='credit-card-image' id='credit-card-image'></img>
            <form class="form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>User/check_pm_indonesian" id="paymentFrm" >
            <input type="hidden" name="item_name" value="<?php echo $item_name;?>">
            <input type="hidden" name="item_price" value="<?php echo number_format($item_amount);?>00">
            Card Number
            <input type="text" name="card_num" id="card_num" value="<?php echo set_value('card_num'); ?>" class='input-field' required></input>
            Card Holder
            <input  type="text" name="name" value="<?php echo set_value('name'); ?>" id="card-holder" class='input-field' required></input>
            <table class='half-input-table'>
              <tr>
                <td> Expiry Month
                  <input type="text" placeholder="eg. 01" class='input-field' maxlength="2" required>

                </td>
                <td> Expiry Year
                <input  type="text" placeholder="eg. 2022" class='input-field' maxlength="4" required>
                </td>
                <tr>
                <td>CCV
                  <input type="text" id="card-cvc" name="cvc" value="<?php echo set_value('cvc'); ?>" maxlength="3" type="text" class='input-field' required></input>
                </td>
                </tr>

              </tr>
            </table>
            <input type="submit" class='pay-btn' style="background:#fe346e;" value="Checkout">
      </form>
          </div>

        </div>
      </div>
</div>
<br><br>

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
