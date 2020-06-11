<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="spreadsheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="my-4 text-center">Web Services Inc. Subscription [$40]

        </h2>
        <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                <input type="text" name="billing_address" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Billing Address">
                <input type="text" name="city" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="City">
                <input type="abr" name="state" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="State">
                <input type="text" name="country" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Country">
                <!-- <label for="card-element">
                    Credit or debit card
                </label> -->
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
            </div>

            <button>Submit Payment</button>
        </form>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/">
        </script>
        <script src="./js/charge.js"></script>

</body>

</html>