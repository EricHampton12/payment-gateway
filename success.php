<?php
if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $tid = $GET['product'];
} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Thank You</title>
    </head>
    <body>
        <div class="container mt-4">
            <h2>Thank you for purchasing <?php echo $product; ?></h2>
            <hr>
            <p>Your transaction for  <?php echo $tid; ?> is successful</p>
            <p>Check your email for more info</p>
            <p><a href="index.php" class="btn btn-light mt-2">Go Back</a>
        </div>
    </body>
</html>