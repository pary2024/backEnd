<?php

    include"../database/config.php";
    header('Content-Type: application/json');

    $sql = "SELECT * FROM `products`";

    $result = mysqli_query($con,$sql);

    // convert to array key
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode([
        #change form array to json the same as object
        "status" => 200,
        "product"   => $products
    ]);

?>