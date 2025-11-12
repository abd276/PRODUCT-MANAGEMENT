<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Products</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Our Safety Products Store</h1>
        </header>
        <div class="content">
            <div class="about-us">
                <h2>About Us</h2>
                <p>We are dedicated to providing the highest quality safety products to ensure your well-being and security. Our mission is to offer reliable and effective solutions for all your safety needs.</p>
            </div>
            <div class="order-form">
                <h2>Order Form</h2>
                <form action="order.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="whatsapp">WhatsApp Number:</label>
                    <input type="text" id="whatsapp" name="whatsapp" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="product">Product:</label>
                    <select id="product" name="product" required>
                        <option value="Product 1">Product 1</option>
                        <option value="Product 2">Product 2</option>
                        <option value="Product 3">Product 3</option>
                    </select>
                    
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required min="1">
                    
                    <button type="submit">Submit Order</button>
                </form>
            </div>
        </div>
        <div class="redirect">
            <a href="products.php" class="button">View Product Quantities and Prices</a>
        </div>
    </div>
</body>
</html>