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

