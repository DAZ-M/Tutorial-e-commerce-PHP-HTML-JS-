<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial e-commerce</title>
    <!-- css file here -->
    <link rel="stylesheet" href="./css/styles.css">
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
            <form action="" class="add_product">
                <!-- Input for product name -->
                <input type="text" placeholder="Enter name" required class="input_fields">
                <!-- Input for product price -->
                <input type="number" min="0" placeholder="Enter price" required class="input_fields">
                <!-- Input for product image -->
                <input type="file" required class="input_fields">
                <!-- Input submit button -->
                <input type="submit" class="submit_btn" value="Add product">
            </form>
        </section>
    </div> 

    <!-- js file here -->
    <script src="./js/script.js"></script>
</body>
</html>