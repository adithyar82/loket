<?php
include('connect_db.php');
session_start();
$username = $_SESSION['uname'];
$order_id = rand(11111111,99999999);
$_SESSION['order_id'] = $order_id;
$product_name = $_REQUEST['id'];
$sql = "SELECT * FROM products WHERE product_name = '$product_name';";
$result = $conn->query($sql);
if($result->num_rows>=0){
    while($row=$result->fetch_assoc()){
        $product_name = $row['product_name'];
        $final_cost = $row['final_cost'];
        $product_quantity = $row['product_quantity'];
        $product_image = $row['product_image'];
        $status = "ordered";
    }
}

    $sql1 = "INSERT INTO order_status(order_id, item_id, fname, final_cost, product_name,payment_id, product_quantity, status) VALUES (Null, '$order_id', '$username', '$final_cost','$product_name','$order_id','$product_quantity','$status');";
    $result1 = $conn->query($sql1);
    echo $sql1;
    echo $result1;
    if($result1->num_rows>=0){
        echo'
        <script>
        window.location = "checkout.php";
        </script>';
    
    }

?>