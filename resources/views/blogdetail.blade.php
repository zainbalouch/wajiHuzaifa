<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$blog->title}}</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- font-awesom-cdn-for-icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom styles -->
  <style>
    /* Customize the footer */
    .footer {
            background-color: #31363F;
            padding: 20px 0;
            /* position: absolute; */
            margin-top: 20px;
            
            width: 100%;
            color: #EEEEEE;
    }
    .description {
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
    }
    .custom-card {
            /* width: 200; Set desired width */
            height: 500px; /* Set desired height */
        }
     .card-image-top {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the entire card */
        }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top style="margin-top: 60px;>
    <div class="container header">
        <a class="navbar-brand" href="{{URL::to('/viewblog')}}">Wajahat Khan's Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link btn-outline-secondary" type="button" href="{{URL::to('/viewblog')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url::to('/addblog')}}">Add New</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="margin: 65px;">
  <div class="row">
    <div class="card-deck">
    <div class="col-sm-5 offset-sm-1">
    <div class="custom-card">
    <img src="{{asset('/uploads/'.$blog->img)}}" class="card-image-top" alt="Product image">
    </div>
    </div>
    <div class="col-sm-6 ">
        <div class="card-header">
            <h3>Product Details</h3>
        </div>
          <div class="row card-body">

            <div class="col-sm-2">
                <label for="card-title">
                    <h6 class="card-text">Product Name</h6>
                </label>
            </div>
            <div class="col-sm-1">
                <h6>:</h6>
            </div>
            <div class="col-sm-9 ">
            <h4 class="card-title" id="card-title">{{$blog->title}}</h4>
            </div>

            <div class="col-sm-2">
                <label for="card-description">
                    <h6>Description</h6>
                </label>
            </div>
            <div class="col-sm-1">
                <h6>:</h6>
            </div>
            <div class="col-sm-9">
                <p class="card-text description" id="card-description">{{$blog->description}}</p>
            </div>


           <div class="card-bottom row" style="margin-top:20%; margin-left:7px;">

            <div class="col-sm-3">
                       <form>
                            <div class="form-group">
                                <label for="quantityInput"><h6>Quantity</h6></label>
                                <div class="input-group">
                                    <input type="number" id="quantityInput" class="form-control" value="1" min="1" max="{{$blog->quantity}}">
                                    <!-- <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="increaseBtn"><i class="fas fa-plus"></i></button>
                                        <button class="btn btn-outline-secondary" type="button" id="decreaseBtn"><i class="fas fa-minus"></i></button>
                                    </div> -->
                                </div>
                            </div>
                        </form>

            </div>

            <div class="col-sm-9"></div>

            

           <div class="col-sm-2">
                <label for="card-price">
                    <h6>Price</h6>
                </label>
            </div>
            <div class="col-sm-1">
                <h6>:</h6>
            </div>
           <div class="col-sm-8">
           <h5 class="card-text " id="card-price" >${{$blog->price}} </h5>
           </div>
           
           
            <div class="col">
            <a href="{{url::to("#")}}" class="btn btn-success " id="cart-button">Buy Now <i class="fa-solid fa-credit-card"></i> </a>
            <a href="{{url::to("#")}}" class="btn btn-warning " id="cart-button">Add to cart <i class="fa-solid fa-cart-shopping"></i> </a>
            </div>
           </div>
        </div>
    </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="border-top: 2px solid black;">

        </div>
        <div class="col-sm-12 mt-3">
        <div class="product-title" >
                <h1 class="text-center">{{$blog->title}}</h1>
        </div>
        <div class="product-description">
            <p>{{$blog->description}}</p>
        </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> wk23372@gmail.com</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +923377601507</p>
            </div>
            <div class="col-md-6">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/profile.php?id=100027577508069"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.twitter.com/wajahat1507/"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/itswajahatofficial/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS (Optional, only needed if you want to use Bootstrap JS features) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
