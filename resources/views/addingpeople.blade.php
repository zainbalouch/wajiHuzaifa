<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Adding Person</title>
    <style>
    /* Custom CSS for navbar */
    .navbar-custom {
      background-color: #007bff;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
      color: #ffffff;
    }

    .navbar-custom .navbar-nav .nav-link {
      color: #ffffff;
    }

    .navbar-custom .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }

    .navbar-custom .navbar-toggler {
      border-color: #ffffff;
    }

    .navbar-custom .navbar-toggler-icon {
      background-color: #ffffff;
    }
  </style>

    <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
      border-radius: 10px 10px 0 0;
    }
    .form-control {
      border-radius: 5px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      border-radius: 5px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>

</head>
<body>

<div class="main">

        <!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <form class="form-inline">
            <a href="/" class="btn btn-outline-success" type="button">Home</a>
            <a href="/" class="btn btn-outline-secondary mx-1" type=button>People's List</a>
            <a href="/" class="btn btn-outline-secondary mx-1" type=button>Demo</a>
            <a href="/" class="btn btn-outline-secondary mx-1" type=button>DEMO</a>
        </form>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="/home">Wajahat Khan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="people-list">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>{{isset($client)?'Update Person Detail':'Add Person Detail'}}</h4>
        </div>
        <div class="card-body">


        @if(Session::has('update-success'))
          <div class="alert alert-success">{{Session::get('update-success')}}</div>
        @endif
          <form action="{{URL::to('/people-add')}}" method="post">

          @if(isset($client))
            <input type="hidden" name="id" value="{{$client->id}}">
          @endif
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{isset($client)? $client->name : ''}}">
              @error('name')
             <p class="alert alert-danger">{{ $message }}</p>
             @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{isset($client)? $client->email : ''}}">
              @error('email')
             <p class="alert alert-danger">{{ $message }}</p>
             @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter phone number" value="{{isset($client)? $client->phone : ''}}">
              @error('phone')
             <p class="alert alert-danger">{{ $message }}</p>
             @enderror
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" name="dob" id="dob" value="{{isset($client)? $client->dob : ''}}">
              @error('dob')
             <p class="alert alert-danger">{{ $message }}</p>
             @enderror
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address" value="{{isset($client)? $client->address : ''}}"></textarea>
              @error('address')
             <p class="alert alert-danger">{{ $message }}</p>
             @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>