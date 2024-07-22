<!-- connection to database -->
 <?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products - Project</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header -->
    <?php include 'header.php' ?>

    <!-- container -->
    <div class="container">
        <section class="display_product">
            <table>
                <thead>
                    <th>Sl No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <!-- php code -->
                <?php
                    $display_product = mysqli_query($connection, 'Select * from `products`');
                    if(mysqli_num_rows($display_product)>0){
                        //logic to fetch data
                        while($row=mysqli_fetch_assoc($display_product)){
                            $product_id=$row['id'];
                            $product_name=$row['name'];
                            $product_image=$row['image'];
                            $product_price=$row['price'];
                ?>

                <!-- Display table -->
                
                <tr>
                    <td><?php echo $product_id ?></td>
                    <td><img src="images/<?php echo $product_image ?>" alt="<?php echo $product_name ?>"></td>
                    <td><?php echo $product_name ?></td>
                    <td><?php echo $product_price ?></td>
                    <td>
                        <a href="" class="delete_product_btn"><i class="fas fa-trash"></i></a>
                        <a href="" class="update_product_btn"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>

                <?php
                     }
                    }else{
                        //Show if database is empty
                        echo "No products available";
                    }
                ?>
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>