<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Ecommerce Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font-awesom-cdn-for-icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

    <style>
           body {
        
            background-color: rgb(118, 171, 174, 0.3);
          
            font-family: Arial, sans-serif;
            color: #EEEEEE;
        }
        .card{
            background-color: #31363F;
        }
        .product-title{
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        
        }
        .description {
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .footer{
            background-color: #31363F;
            padding: 20px 0;
            position: absolute;
            margin-top: 20px;
            
            width: 100%;
        }
       

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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

<!-- Hero Section -->
<section class="hero" style="margin-top: 60px;" >
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-12 text-center my-2 bg-secondary text-white p-2">
                <h1>Welcome to Our Ecommerce Store</h1>
                <p class="text-warning">Discover a wide range of products and shop with confidence.</p>
                
            </div>
            <div class="col-12 border-bottom border-secondary ">
                
            </div>
            
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="featured-products">
    <div class="container">
        <h3 class="section-title text-dark m-2">Featured Products</h2>
        <div class="row card-deck">
            @foreach($blogs as $blog)

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{asset('/uploads/'.$blog->img)}}" class="card-img-top" alt="Product image" style="height: 300px; " >
                    <div class="card-body">
                        <h4 class="card-title product-title">{{$blog->title}}</h4>
                        <h5 class="card-title text-warning">${{$blog->price}} </h5>
                        <p class="card-text description">{{$blog->description}}</p>
                        <a href="{{url::to('blogdetail?id='.$blog->id)}}" class="btn btn-primary">view Details</a>
                        <div class="card-text mt-2 pl-1">
                        @if(isset($blog->quantity))

                            @if($blog->quantity >= 1)
                               <p class="text-success"> {{'Available in stock.'}}</p>
                            @else
                                <p class="text-danger"> {{'Out of Stock !'}}</p>
                            @endif

                        @endif
                        </div>

                    </div>
                </div>
            </div>

            @endforeach

            <!-- Add more product cards here -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> wk23372@gmail.com</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +92 3377601507</p>
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

<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
