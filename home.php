<?php
$rootPath = "";
include_once ('api/Config/Config.php');
$baseUrl = str_replace("home.php", "", URL['current']);

?>

<?=template_header('Home')?>
<script
	src="https://www.paypal.com/sdk/js?client-id=ARN5_hlu6Lpdx-8ATMQpO_XYWlhJGpiPVcm1BdjIAPNEiGWPJ3Xs1xzk2WjU-Jy-niaM7yMkSB5KI4Ep"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>
<div class="recentlyadded content-wrapper">
	<h2>PlayStation 5 Limited Time Offer!</h2>
	<div class="products">
		<a href="javascript:void(0)" class="product"> <img src="imgs/ps5.jpg"
			width="200" height="200" alt="Camera"> <span class="name">PS5 Combo Deal</span>
			<span class="price">$19.99</span>
		</a> <a href="javascript:void(0)" class="product"> <img
			src="imgs/console.jpg" width="200" height="200" alt="Wallet"> <span
			class="name">PS5 Console</span> <span class="price">Free!</span>
		</a> <a href="javascript:void(0)" class="product"> <img
			src="imgs/headset.jpg" width="200" height="200" alt="Watch"> <span
			class="name">PS5 Headset</span> <span class="price">Free!</span>
		</a> <a href="javascript:void(0)" class="product"> <img
			src="imgs/remote.jpg" width="200" height="200" alt="headphones"> <span
			class="name">PS5 Remote</span> <span class="price">Free!</span>
		</a>
		<div id="paypal-button-container"></div>
	</div>
</div>


<script>
  paypal.Buttons({

	  style: {
	   size: 'small',
	   color: 'gold',
	   shape: 'pill',
	   label: 'buynow'
	  },

      createOrder: function() {
          let formData = new FormData();
          formData.append('item_amt', 19.99);
          formData.append('tax_amt', 0.00);
          formData.append('handling_fee', 0.00);
          formData.append('insurance_fee', 0.00);
          formData.append('shipping_amt', 0.00);
          formData.append('shipping_discount', 0.00);
          formData.append('total_amt', 19.99);
          formData.append('currency', 'USD');

          return fetch(
              '<?= $rootPath.URL['services']['orderCreate']?>',
              {
                  method: 'POST',
                  body: formData
              }
          ).then(function(response) {
              return response.json();
          }).then(function(resJson) {
              console.log('Order ID: '+ resJson.data.id);
              return resJson.data.id;
          });
      },
      
      onApprove: function(data, actions) {
    	  let postData = new FormData();
          return fetch(
              '<?= $rootPath.URL['services']['orderCapture'] ?>',
              {
                  method: 'POST',
                  body: postData
              }
          ).then(function(res) {
              return res.json();
          }).then(function(res) {
              window.location.href = 'orderplaced.php';
          });
      }

  }).render('#paypal-button-container');
  </script>

<?=template_footer()?>