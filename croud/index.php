<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
    <header class=" bg-black p-2">
        <h1 class=" text-center text-light">PHP AJAX</h1>
    </header>
    <div class="container d-flex align-items-center justify-content-between my-2">
        <h3>Product List </h3>
        <button class=" btn  btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">New product </button>
    </div>
    <div class="container mt-3">
        <table class=" table">
            <thead>
                <tr>
                    <th>Product id</th>
                    <th>Product name</th>
                    <th>Product price </th>
                    <th>Qty</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody  class="product_list">
                
            </tbody>
        </table>
    </div>
    <!-- modal create product  -->
     <?php
        include"../modal/create.php";
     
     
     ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>


    const SelectProduct = ()=>{
        $.ajax({
            method   : 'GET',
            url      :'../controler/productController.php?type=select',
            dataType : 'json',
            success : (respone)=>{
                if (respone.status == 200){
                    let products = respone.product;
                    let tr ="";
                    $.each(products, (index,value)=>{
                        tr +=
                        `<tr>
                                <td>${value.id}</td>
                                <td>${value.product_name}</td>
                                <td>${value.product_price}</td>
                                <td>${value.qty}</td>
                                <td>image.png</td>
                                <td>

                                </td>
                            </tr>`;
                    });

                    $(".product_list").html(tr);
                      
                    
                }

            }


        })
    }
    SelectProduct();
        const CreateProduct = ()=>{
            let data = new FormData($(".formCreate")[0]);

            let data_obj = {
                name  : data.get('name'),
                price : data.get("price"),
                qty   : data.get("qty"),
                // image : dat.get("image"),
                
            }
            $.ajax({
                method  :'POST',
                url     : '../controler/productController.php?type=create',
                data    : data_obj,
                dataType : 'json',
                success :  (respone) =>{
                    if (respone.status == 200){
                        $(".CreateProduct").trigger('reset');
                        // clear data del mean nv knog form   jenh pi form 
                                            //trigger use to reset modal 
                        $("#exampleModal").modal('hide');
                        // use to bit modal rbos   form 
                        SelectProduct();
                    }
                }
            })
            // console.log(Data_obj);
            
        }
</script>
</html>