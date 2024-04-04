<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Person</title>
</head>
<body>
    <div class="main">
        <div class="header mb-3">
            <nav class="navbar navbar-light" style="background-color: black;">
                <form class="container-fluid justify-content-start">
                    <button class="btn btn-outline-success me-2" type="button"><a class="text-decoration-none link-light" href="/home">Home</a></button>
                    <button class="btn btn-sm btn-outline-secondary me-2" type="button"><a class="text-decoration-none link-light" href="/calculator">Calculator</a></button>
                    <button class="btn btn-sm btn-outline-secondary" type="button"><a class="text-decoration-none link-light" href="/addPeople">Add Person</a></button>
                    <button class="btn btn-sm btn-outline-secondary" type="button"><a class="text-decoration-none link-light" href="/list_People">People's List</a></button>
                </form>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                
                   
                <div class="div">
                    <h1 class="text-center m-2">{{isset($people)? "Update Person" : "Add a Person"}}</h1>
                </div>
                
                <form action="{{isset($people)?URL::to('/update_people'):URL::to('/addPeople')}}" method="post">
                   @if(isset($people))
                    <input type="hidden" value="{{$people->id}}" name="id">
                   @endif

                @csrf
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{isset($people)?$people->name : ''}}" id="inputName" name="name">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" value="{{isset($people)?$people->email : ''}}"  id="inputEmail" name="email">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{isset($people) && $people->gender=='male'? 'checked' : ''}} >
                        <label class="form-check-label" for="male">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{isset($people) && $people->gender=='female'? 'checked' : ''}}>
                        <label class="form-check-label" for="female">
                        Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="shemale" value="shemale" {{isset($people) && $people->gender=='shemale'? 'checked' : ''}}>
                        <label class="form-check-label" for="shemale">
                        Shemale
                        </label>
                    </div>

                    @error('gender')
                    <p class="text-danger">{{$message}}</p>
                    @enderror

                    </div>
                    
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="condition" name="condition" value="disabled" {{isset($people) && $people->condition=='disabled'? 'checked' : ''}}>
                        <label class="form-check-label" for="condition">
                       Disabled
                        </label>
                    </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3 offset-sm-2">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Country</label>
                                </div>
                                <select class="form-control" id="inputGroupSelect01" name="country">
                                    <option value="">Select a Country..</option>
                                    <option value="Pakistan" {{isset($people) && $people->country=='Pakistan'? 'selected' : ''}}>Pakistan</option>
                                    <option value="India" {{isset($people) && $people->country=='India'? 'selected' : ''}}>India</option>
                                    <option value="America" {{isset($people) && $people->country=='America'? 'selected' : ''}}>America</option>
                                    <option value="Canada" {{isset($people) && $people->country=='Canada'? 'selected' : ''}}>Canada</option>
                                </select>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 offset-sm-2">
                        <button type="submit" class="btn btn-primary" >{{isset($people)? "Update Detail" : "Add Detail"}}</button>
                    </div>
                </div>
                
                </form>

            </div>
        </div>
        <!-- <div class="row mb-3">
            @if(isset($name))
                <p>Your name is: {{$name}}</p>
            @endif
        </div>
        <div class="row mb-3">
            @if(isset($email))
                <p>Your email is: {{$email}}</p>
            
            @endif
        </div>
        <div class="row mb-3">
            @if(isset($gender))
                <p>Your gender is: {{$gender}}</p>
            
            @endif
        </div>
        <div class="row mb-3">
            @if(isset($condition))
                <p>Your condition is: {{$condition}}</p>
            
            @endif
        </div>
        <div class="row mb-3">
            @if(isset($country))
                <p>Your country is: {{$country}}</p>
            
            @endif
        </div> -->
    </div>
</body>
</html>