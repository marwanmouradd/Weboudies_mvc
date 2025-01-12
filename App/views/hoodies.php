<?php
//include "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oudies</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="public/css/styles.css">

  <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      
      footer {
        margin-top: auto;
      }
      .hoodies-container {
        display:grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 90px;
        padding: 20px;
      }
  
      .hoodie {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
      }
  
      .hoodie img {
        width: 100%;
        height: auto;
      }
  
      .hoodie-name {
        font-weight: bold;
        margin-bottom: 5px;
      }
  
      .hoodie-price {
        margin-bottom: 10px;
      }
  
      .icons {
        display: flex;
        justify-content: space-around;
        align-items: center;
      }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo"><img src="public/img/name.png" alt="Oudies Logo"></div>
      <ul class="nav-links">
        <li ><a href="home.html">Home</a></li>
        <li><a href="hoodies.html">Hoodies</a></li>
        <li><a href="#">Crewnecks</a></li>
        <li><a href="#">Pants</a></li>
      </ul>
      <div class="icons">
        <a href="#"><i class="fas fa-user"></i></a>
        <a href="#"><i class="fas fa-shopping-cart"></i></a>
        <a href="login.html" class="btn">Login</a>
      </div>
    </nav>
  </header>
  <body>

    <div class="hoodies-container">
        <!-- Hoodie 1 -->
        <div class="hoodie">
          <img src="o3.jpg" alt="Hoodie 1">
          <div class="info">
            <p class="hoodie-name">Hoodie Name 1</p>
            <p class="hoodie-price">$29.99</p>
            <div class="icons">
              <a href="#"><i class="fas fa-shopping-cart"></i></a>
              <a href="#"><i class="far fa-heart"></i></a>
            </div>
          </div>
        </div>
    
        <!-- Add more hoodie items with the same structure -->
        <!-- Hoodie 2 -->
        <div class="hoodie">
          <img src="public/img/o3.jpg" alt="Hoodie 2">
          <div class="info">
            <p class="hoodie-name">Hoodie Name 2</p>
            <p class="hoodie-price">$39.99</p>
            <div class="icons">
              <a href="#"><i class="fas fa-shopping-cart"></i></a>
              <a href="#"><i class="far fa-heart"></i></a>
            </div>
          </div>
        </div>
        <!-- Hoodie 2 -->
        <div class="hoodie">
            <img src="public/img/o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
          <!-- Hoodie 2 -->
        <div class="hoodie">
            <img src="public/img/o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
          <!-- Hoodie 2 -->
        <div class="hoodie">
            <img src="public/img/o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
          <!-- Hoodie 2 -->
        <div class="hoodie">
            <img src="o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
          <!-- Hoodie 2 -->
        <div class="hoodie">
            <img src="o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
          <div class="hoodie">
            <img src="o3.jpg" alt="Hoodie 2">
            <div class="info">
              <p class="hoodie-name">Hoodie Name 2</p>
              <p class="hoodie-price">$39.99</p>
              <div class="icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="#"><i class="far fa-heart"></i></a>
              </div>
            </div>
          </div>
        <!-- Add more hoodie items as needed -->
      </div>
    
  </body>
  
  
  <footer>
    <div class="footer-content">
      <a href="about.html">About Us</a>
      <p>Contact Us: contact@oudiess.com</p>
      <p>&copy; 2023 Oudies </p>
      <div class="social-icons">
        <a href="https://www.instagram.com/oudies" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/oudies" target="_blank"><i class="fab fa-facebook-f"></i></a>
      </div>
    </div>
  </footer>