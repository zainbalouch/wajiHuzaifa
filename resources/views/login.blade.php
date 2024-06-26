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
        <h1>Login Page</h1>
        @if (Session::has('error'))
        <p class="text-danger">{{Session::get('error')}}</p>

        @endif
        <form action="/loginData" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="email">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputpassword1" class="form-label">password</label>
                <input type="password" name="password" class="form-control" id="exampleInputpassword1">
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
