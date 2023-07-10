<!-- rzp_test_pZBd9rupmqsXga	 -->
<!-- WQStCyRvxbgMmK6zSH8gJ3pk -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>SeedX</title>
    <link rel="stylesheet" href="CSS.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>

    body{
        padding: 0px;
        margin: 0px;
    }
    #text{
      display: flex;
      background-color: pink;
      text-align: center;
      justify-content: space-around;
    }
   
    .navbar-brand{
        color: green;
    }
    .navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0; 
    }
    .navbar-brand:hover{
        transform: scale(1.2);
        color: green;
    }
    .nav-item:hover{
        transform: scale(1.2);
    }
    .container-fluid{
        background-color: greenyellow;
        /* position: fixed; */
        box-shadow: 0px 2px 8px 1px #888888;
        opacity: 0.8;
    }


    /*  */
    .marquee{
        /* z-index: -1; */
        /* position: fixed; */
        background-color: black;
        color: green;
        /* padding-top: 5px; */
    }

    /*  */
    .photo{
        margin: 10px 80px;
    }
    #p3{
        scale: 1.1;
    }
    #p1:hover{
        transform: scale(1.1);
    }
    #p3:hover{
        transform: scale(0.9);
    }
    #p2:hover{
        transform: scale(1.1);
    }
    .img-fluid{
      /* background-size:auto; */
      width: 500px;
      height: 300px;
    }
    #photo1{
      opacity: 0.9;
      width: 800px;
      height: 300px;
    }
    #photo2{
      opacity: 1.1;
    }
    .containerN{
      display: flex;
      justify-content: space-around;
      margin: 20px 100px;
      z-index: -1;
    }
    .card{
      padding: 5px 5px;
      margin: 5px 5px;
    }
    .container-fluid2{
        padding: 10px 10px;
        display: flex;
        /* position: fixed; */
        background-color: cadetblue;
        z-index: 1;
    }
    .nav-link dropdown{
        padding: 10px 100px;
    }
    .container3{
        display: flex;
        justify-content: space-evenly;
        background-image: url(photos/p3.jpg);
        background-size: cover;
        /* background-color: rgb(210, 247, 222); */
        /* opacity: 0.8; */
        padding: 170px 30px;
        margin: 10px 10px;
    }

    .right{
        text-decoration: none;
    }
    
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h3>SeedX</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h6>Home</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h6>Search</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h6>Contact</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><h6>About</h6></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="buy.html"><h6>Cart</h6></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<!--  -->


<div class="container-fluid2">
        <div class="nav-item dropdown" style="padding-left: 40px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SEEDS
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="buy.html">BEET ROOT</a></li>
                <li><a class="dropdown-item" href="buy.html">BHINDI</a></li>
                <li><a class="dropdown-item" href="buy.html">BITTER GOURD</a></li>
                <li><a class="dropdown-item" href="buy.html">BOTTLE GOURD</a></li>
                <li><a class="dropdown-item" href="buy.html">BRINJAL</a></li>
                <li><a class="dropdown-item" href="buy.html">CABBAGE</a></li>
                <li><a class="dropdown-item" href="buy.html">CAULIFLOWER</a></li>
                <li><a class="dropdown-item" href="buy.html">CARROT</a></li>
                <li><a class="dropdown-item" href="buy.html">CHILLI</a></li>
                <li><a class="dropdown-item" href="buy.html">CUCUMBER</a></li>
                <li><a class="dropdown-item" href="buy.html">ONION</a></li>
                <li><a class="dropdown-item" href="buy.html">RADISH</a></li>
                <li><a class="dropdown-item" href="buy.html">TOMATO</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown" style="padding-left: 20px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                FERTILIZERS
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">MICRO FERTILIZERS</a></li>
                <li><a class="dropdown-item" href="#">PGRs</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown" style="padding-left: 20px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PESTICIDES
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">BIO PESTICIDES</a></li>
                <li><a class="dropdown-item" href="#">FUNGICIDES</a></li>
                <li><a class="dropdown-item" href="#">INSECTICIDES</a></li>
                <li><a class="dropdown-item" href="#">WEEDICIDES</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown" style="padding-left: 20px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                BRAND
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">SAKATA</a></li>
                <li><a class="dropdown-item" href="#">GOLDEN</a></li>
                <li><a class="dropdown-item" href="#">GMS</a></li>
                <li><a class="dropdown-item" href="#">ASHOKE</a></li>
                <li><a class="dropdown-item" href="#">CHAKRA</a></li>
                <li><a class="dropdown-item" href="#">KALASH</a></li>
                <li><a class="dropdown-item" href="#">EAST-WEST</a></li>
            </ul>
        </div>


    <div class="right" style="padding-left: 30px;">
        <form action="logout.php" method="post">
            <button class="btn-btn-primary" type="submit">Logout</button>
        </form>
    </div>
</div>
    
    
    <marquee behavior="" direction="left" class="marquee">
        <h6>SHOP TODAY FOR BETTER TOMORROW!</h6>
    </marquee>
    
    
    <div class="containerN">
        <img src="photos/p2.jpg" class="img-fluid" id="photo1" alt="Not available">
        <img src="photos/giphy1.gif" class="img-fluid" id="photo2" alt="Not available">
    </div>
    
    <div class="containerN">
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
    </div>

    <div class="containerN">
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
    </div>

    <div class="containerN">
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
    </div>

    <div class="containerN">
      <div class="card" style="width: 18rem; height: 100px;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;height: 100px">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
    </div>

    <div class="containerN">
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="photos/EW4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Price</h5>
          <p class="card-text">Some quick example text to build on the Price and make up the bulk of the card's content.</p>
          <a href="buy.html" class="btn btn-primary">BUY</a>
        </div>
      </div>
    </div>

    
    
    
    <div class="container3">
        <img src="photos/img2.png" class="img-fluid" id="photo2" alt="Not available">
        <img src="photos/img3.png" class="img-fluid" id="photo2" alt="Not available">
        <!-- <img src="photos/img1.png" class="img-fluid" id="photo1" alt="Not available"> -->
    </div>
    
    
    <div>
        <div id="text">Call us: +91-9129-9129-91</div>
      <div id="text">Free Shipping above ₹499 | All India Delivery</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>