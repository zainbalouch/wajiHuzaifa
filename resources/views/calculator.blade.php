<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>calculator</title>

    <style>
        .main{
            height: 100vh;
        }
        .title{
            border-bottom: 5px solid black;
        }

    </style>
</head>
<body>
   <div class="main d-flex align-items-center">
        <div class="container  ">
            <div class="row">
                <div class="col-md-5 mt-5 ">
                    <h1 class="text-center title">Laravel calculator</h1>
                </div>
                <div class="col-md-6">
                    <form action="/calculator" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Number:</label>
                            <input type="text" class="form-control " name="fname" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="sname">Password:</label>
                            <input type="text" class="form-control" name="sname" id="sname">
                        </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Operator</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="operator">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>

                        <button type="submit" class="btn btn-primary">Show Result</button>
                    </form>
                </div>   
            </div>
            
                @if(isset($result))
                <div>
                    <h2>Your Answer is {{$result}}</h2>
                </div>
                @endif
                @if(isset($error))
                <div>
                    <p class="text-danger">Error Occured:{{$error}}</p>
                </div>
                @endif
        </div>
   </div>
</body>
</html>