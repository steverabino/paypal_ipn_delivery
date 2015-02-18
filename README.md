# paypal_ipn_delivery
Delivers Paypal IPN (Instant Payment Notifications) messages to a locally hosted IPN listener (e.g. for use with Drupal/Ubercart)

### What is it?
If you are running a version of Drupal with ubercart locally (e.g. from http://localhost), and want to test the full end-to-end Paypal payment experience using PayPal Website Payments Standard (PayPal WPS) without this tool, you will be able to:
- Set your Ubercart Payment Settings to use the Sandbox, rather than Live PayPal server
- Set the PayPal e-mail address to a test seller account set up on http://sandbox.paypal.com
- Make a payment from your site hosted locally, through PayPal's sandbox, using a test buyer account, and you'll be returned back to your local site

However, the order will remain at a "Pending" state, as PayPal cannot send an Instant Payment Notification (IPN message) back to your site unless it is set up on a publically available server. This tool allows your localhost to fake that IPN message to your locally hosted IPN receiver, and thus, the payment will be marked as complete.

###How to use it
1. Make the test payment through PayPal's sandbox - your order should be in a "Pending" state
2. Place these files somewhere where they will be accesible by localhost (e.g. in your htdocs, or equivalent, folder)
3. Open index.html
4. Grab the IPN message from http://sandbox.paypal.com by logging in as the test seller account and selecting History > IPN History from the top menu and selecting the message you want to mimic
5. Enter the IPN message into index.html and change the location of your IPN listener (if different from that shown).
6. Click "Convert to IPN post"
7. All the variables associated with the payment are shown on screen. Click "Send to IPN listener".
8. Check the order has now moved on from its "Pending" state.
