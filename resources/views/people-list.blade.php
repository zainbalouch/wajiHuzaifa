<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Clients</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
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
    .table th, .table td {
      vertical-align: middle;
    }

    .action-buttons {
      white-space: nowrap;
    }
  </style>
</head>
<body>

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
@if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('deleted'))
          <div class="alert alert-success">{{Session::get('deleted')}}</div>
        @endif
  <h2 class="mb-4">List of Clients</h2>
  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

        @foreach($clients_list as $client)
          <tr>
            
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->dob}}</td>
            <td>{{$client->address}}</td>
            <td class="action-buttons">
              <a class="btn btn-primary btn-sm"  type="button" href="{{URL::to('/people-add?id='.$client->id)}}">Update</a>
              <a class="btn btn-danger btn-sm "  type="button" href="{{URL::to('/peopledelete?id='.$client->id)}}">delete</a>
            </td>
          </tr>
        @endforeach
          <!-- Add more rows for additional clients -->
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
