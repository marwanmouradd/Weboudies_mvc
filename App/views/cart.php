<?php
//include "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shoppingcart" href="shoppingcart.css">
    <title>Shopping Cart</title>
</head>
<body>

    <header>
        <h1>Shopping Cart</h1>
    </header>

    <section class="products">
        <div class="product">
            <img src="product1.jpeg" alt="Product 1">
            <h2>Product 1</h2>
            <p>$19.99</p>
            <button onclick="addToCart('Product 1', 19.99)">Add to Cart</button>
        </div>

        <div class="product">
            <img src="product2.jpeg" alt="Product 2">
            <h2>Product 2</h2>
            <p>$29.99</p>
            <button onclick="addToCart('Product 2', 29.99)">Add to Cart</button>
        </div>

  <section class="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <p>Total: $<span id="total">0.00</span></p>

    <!-- Added a payment method selection -->
    <label for="paymentMethod">Payment Method:</label>
    <select id="paymentMethod">
        <option value="select">Select</option>
        <option value="cashOnDelivery">Cash on Delivery</option>
        <option value="creditCard">Credit Card</option>
    </select>

        <!-- Add more products as needed -->

    </section>

    <section class="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="total">0.00</span></p>
        <button onclick="checkout()">Checkout</button>
    </section>
  

    <script src="cart.js"></script>

</body>
</html>
