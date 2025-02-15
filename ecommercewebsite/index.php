<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and mysql</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
       
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">

  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li></ul>
</nav>
<div class="bg-light">
  <h3 class="text-center"> Moorv Store </h3>
<p class="text-center">Communication is at the art of ecommerce and community</p>
</div>
<div class="row">
  <div class="col-md-10">
<div class="row">
  <div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress.png " height="200px" width:100% class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart </a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
  </div>
  <div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
  </div>
  <div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
  </div>

</div>
<div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dresss5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
  <div class="card" >
  <img src="./images/dress6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
</div>
</div>
</div>
  <div class ="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info ">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands </h4></a>
</li>  
    <li class="nav-item ">
        <a href="#" class="nav-link text-light">Zara</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">New me</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">Urbanic</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">H&M</a>
</li>
    </ul>
    <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info ">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>  
    <li class="nav-item ">
        <a href="#" class="nav-link text-light">category1</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">category2</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">category3</a>
</li>
<li class="nav-item ">
        <a href="#" class="nav-link text-light">category4</a>
</li>
    </ul>
  </div>
</div>

<div class="bg-info p-3 text-center">
  <p> All rights reserved @-Designed by Malya </p>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>