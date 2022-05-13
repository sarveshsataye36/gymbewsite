<?php
/*
  Template Name: Gym
  Description:  Gym Protien HTML Template
  Author: Sarvesh/Yuraj
  Author URI: 
  file:Navbar.php
  Version: 1.0
  Company:
  Created: 12-May-2022
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle cursor-pointer" onclick="toggleClass();" id="navbarDropdown" role="button" data-toggle="#dropdownMenus" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" id="dropdownMenus" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product1.php">Product1</a>
          <a class="dropdown-item" href="product2.php">Product2</a>
          <a class="dropdown-item" href="product3.php">Product3</a>
          <a class="dropdown-item" href="product4.php">Product4</a>
          <a class="dropdown-item" href="product5.php">Product5</a>
          <a class="dropdown-item" href="product6.php">Product6</a>
          <a class="dropdown-item" href="product7.php">Product7</a>
          <a class="dropdown-item" href="product8.php">Product8</a>
          <a class="dropdown-item" href="product9.php">Product9</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>