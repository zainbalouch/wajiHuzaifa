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
        @if (Session::has('deleteMessage'))
            <div class="my-5">
                <div class="alert alert-danger" role="alert">
                    {{Session::get('deleteMessage')}}
                  </div>
            </div>
        @endif
        <h1 class="my-5">User List</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Disabled</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people_list as $index => $people)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $people->name }}</td>
                        <td>{{ $people->email }}</td>
                        <td>{{ $people->isDisabled == 1 ? 'Yes' : 'No' }}</td>
                        <td><a href="{{ URL::to('/add-person?id=' . $people->id) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ URL::to('/delete-person?id=' . $people->id) }}"
                                class="btn btn-secondary">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
