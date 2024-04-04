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
        <div class="row text-end my-5">
            <div class="col">
                <a href="{{ URL::to('/list_people') }}" class="btn btn-secondary">View all People</a>
            </div>
        </div>
        <h1 class="my-3"> {{ isset($people) ? 'Update User' : 'Add new Person' }} </h1>
        <form action="{{ isset($people) ? URL::to('/update-person') : URL::to('/add-person') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($people))
                <input type="hidden" name="id" value="{{ $people->id }}">
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="{{ isset($people) ? $people->name : '' }}"
                    class="form-control" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" value="{{ isset($people) ? $people->email : '' }}"
                    class="form-control" placeholder="email">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 input-group">
                <input type="file" name="image" class="form-control" >
                @error('image')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked"
                        name="isDisabled" {{ isset($people) && $people->isDisabled == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckChecked">
                        Are you Disabled
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
