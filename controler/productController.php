<?php

    include"../database/config.php";
            // header this is used to be change to json extension 
    header('Content-Type: application/json');


    $type = $_GET['type'];

    switch($type){
        case 'create' : {

            $name = $_POST['name'];
            $price= $_POST['price'];
            $qty  = $_POST['qty'];
        
            $sql = "INSERT INTO `products`(`product_name`, `product_price`, `qty`) VALUES 
                        (
                        '$name',
                        '$price',
                        '$qty'
                    )";
                    mysqli_query($con,$sql);
            echo json_encode([
                'status' => 200,
                'messag' => 'Product successful'
            ]);
            break;
        }
        case 'select' : {
            $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
            $result = mysqli_query($con,$sql);
    // convert to array key
            $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
            echo json_encode([
        #change form array to json the same as object
                "status"  => 200,
                "product" => $products
             ]);
            break;
        }
    }


 





?>