<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List Of People</title>
</head>
<body>
<div class="main">
        <div class="header mb-3">
            <nav class="navbar navbar-light" style="background-color: black;">
                <form class="container-fluid justify-content-start">
                    <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none link-light" href="/home">Home</a></button>
                    <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="text-decoration-none link-light" href="/calculator">Calculator</a></button>
                    <button class="btn btn-sm btn-outline-secondary" type="button"><a class="text-decoration-none link-light" href="/addPeople">Add Person</a></button>
                </form>
            </nav>
        </div>
        <div class="container ">
            <div class="row">

            @if(Session::has('updatemsg'))
                <p>{{Session::get('updatemsg')}}</p>
            @endif

            @if(Session::has("deletemeassage"))
                <p>{{Session::get("deletemeassage")}}</p>
            @endif
           
            <table class="table table-dark">
                <thead>
                        <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Condition</th>
                        <th scope="col">Country</th>
                        <th scope="col" colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_People as $people)

                    
                        <tr>
                       
                        <td>{{$people->name}}</td>
                        <td>{{$people->email}}</td>
                        <td>{{$people->gender}}</td>
                        <td>{{$people->condition}}</td>
                        <td>{{$people->country}}</td>
                        <!-- Adding variable in url -->
                        <td><a href="{{URL::to('/addPeople?id='.$people->id)}}" type="button" class="btn btn-primary">Update</a></td>
                        <td><a href="{{URL::to('/deletepeople?id='.$people->id)}}" type="button" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                      
                    </tbody>
            </table>
            </div>
        </div>
</div>
</body>
</html>