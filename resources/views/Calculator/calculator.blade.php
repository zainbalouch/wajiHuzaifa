<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .main {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="main d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>My Calculator</h1>
                </div>
                <div class="col-6">
                    <form action="{{ URL::to('calculator') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Enter first number" name="fnumber">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Enter second number" name="snumber">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="operator">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            @if (isset($result))
                <div class="row">
                    <h1>Your result is: {{ $result }}</h1>
                </div>
            @endif
            @if (isset($error))
                <div class="row">
                    <p class="text-danger">An error occured: {{ $error }}</p>
                </div>
            @endif

        </div>
    </div>

</body>

</html>
