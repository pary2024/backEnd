<?php
    header('Content-Type: application/json');
    $name = $_POST['name'];
    $phone =$_POST['phone'];
    echo json_encode([
        #change form array to json the same as object
        "status" => 200,
        "data"   => [
            "name" => $name,
            "phone"=> $phone
        ]
    ]);

?>