<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <form class="container-fluid justify-content-start">
            <a class="btn btn-outline-success me-2" type="button" href="{{ URL::to('/') }}">Home</a>
            <a class="btn btn-outline-success me-2" type="button" href="{{ URL::to('/login') }}">Login</a>
            <a class="btn btn-outline-success me-2" type="button" href="{{ URL::to('/add-person') }}">Add Person</a>
        </form>
    </nav>
    <div class="container">
        <h1>Add new Person</h1>
        <form action="{{URL::to('/add-person')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
