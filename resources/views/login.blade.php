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
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="male" name="gender" checked>
                    <label class="form-check-label" for="gender1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="female" name="gender" >
                    <label class="form-check-label" for="gender2">
                        Female
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
