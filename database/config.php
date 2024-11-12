<?php
    $con = mysqli_connect('localhost','root','','ajax_db',3306);

    //create table

    $sql = "CREATE TABLE IF NOT EXISTS products(

        `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `product_name` varchar(50) not null,
        `product_price` DECIMAL(10,2) not null,
        `qty` int(11) not null,
        `image` varchar(255) null,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($con,$sql);


?>