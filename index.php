<?php include 'connect.php';
    if(isset($_POST['add_product'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_temp_name=$_FILES['product-image']['tmp_name'];
        $product_image_folder='images/'.$product_image;

        $insert_query=mysqli_query($connection, "insert into `products` (name,price,image) values
        ('$product_name', '$product_price', '$product_image')") or die("Insert query failed");

        if($insert_query){
            move_uploaded_file($product_image, $product_image_folder);
        }else{
            echo "There was some error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial e-commerce</title>
    <!-- css file here -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- font awesome cdn link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    <!-- Header section -->
    <?php include('header.php') ?>

    <!-- Form section -->
    <div class="container">
        <section>
            <h3 clas="heading">Add products</h3>
            <form action="" class="add_product" method="post" enctype="multipart/form-data">
                <!-- Input for product name -->
                <input type="text" name="product_name" placeholder="Enter name" required class="input_fields">
                <!-- Input for product price -->
                <input type="number" name="product_price" min="0" placeholder="Enter price" required class="input_fields">
                <!-- Input for product image -->
                <input type="file" name="product_image" required class="input_fields" accept="image/png, image/jpg, image/jpeg">
                <!-- Input submit button -->
                <input type="submit" name="add_product" class="submit_btn" value="Add product">
            </form>
        </section>
    </div> 

    <!-- js file here -->
    <script src="./js/script.js"></script>
</body>
</html>