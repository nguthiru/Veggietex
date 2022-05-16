

<?php
    include("../admin/includes/db.php");

    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];


    $quantity_update = mysqli_query($con,"UPDATE cart SET qty=$quantity WHERE ID=$product_id");

?>