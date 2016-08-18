this has been patched by paypal.

# PaySurf


PayPal CSRF for account takeover.

How does it work?

Place the files on a web server and send the link to someone.
If they are logged in on paypal, it will add new data to their profile via CSRF.
Paypal customer service can then be called to gain access to the account via SE.

Constraints:

card.php doesn't work unless it has a BillingAddressID.
This BillingAddressID needs to be fetched from the returned data from address.php
Due to the same origin policy paypal has in place, i am not sure if this can be achieved with AJAX.
BillingAddressID can be fetched manually by adding a new credit card to your account, opening developer tools and
looking at the Data-ID input field for a current address.

This exploit works as the wallet in paypal is missing CSRF headers.

<b>BUT WHY DONT YOU USE AJAX TO DO A CROSS DOMAIN REQUEST???</b>

Well yes i could, but there is a problem.

1. You would be able ton only do a single request, as PayPal has a same origin policy.
2. Even if you could do multiple requests, browsers like Firefox and Chrome have enabled web security.

