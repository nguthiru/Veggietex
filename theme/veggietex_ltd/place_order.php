<?php

include("admin/includes/db.php");
session_start();
if (isset($_POST)) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $street = $_POST['street'];
    $apart = $_POST['towncity'];

    $post = $_POST['postcodezip'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO shipping_details(fname,lname,street,town,postcode,phone,email,client) VALUES ('$fname','$lname','$street','$apart','$post','$phone','$email',$user_id)";
    $query = mysqli_query($con, $sql);
    $errors = mysqli_error($con);
    $shipping_id = mysqli_insert_id($con);
    $result_set = mysqli_query($con, "SELECT * FROM cart WHERE client=$user_id;");
    $success = false;
    while ($row_products = mysqli_fetch_array($result_set)) {
        $id = $row_products['ID'];
        $sql_ship = "INSERT INTO orders(product_id,shipping_id) VALUES ($id,$shipping_id);";
        $result_set2 = mysqli_query($con, $sql_ship);
        
        $update_query = mysqli_query($con,"UPDATE cart SET ordered=1 WHERE ID=$id;");
    }
    if ($success) {
        $sent_mail = mail("nguthiruedwin@gmail.com", "New Order ", "
    A new order has been placed by $fname $lname ,you can contact them at $email or at $phone
    ");

        if ($sent_mail) {
            echo "
        <script>
        alert('Your order has been placed');
        </script>
        ";

            header("Location: index.php");
        } else {
            echo "
        <script>
        alert('An error has occured try again');
        history.back();
        </script>
        ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placing Order</title>
</head>

<body>

</body>
<script>

</script>

</html>