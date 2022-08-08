<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Edit</h1>
        <hr>
        <div class="row">
            <div class="col-3">

            </div>
            <div class="card mt-5 col-5">
                <div class="card-body">
                    <div class="container">
                        <form action="{{route('crud.update',$find->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $find->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Lastname</label>
                                <input type="text" name="surname" class="form-control" value="{{ $find->surname }}">
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="number" name="age" class="form-control" value="{{ $find->age }}">
                            </div>
                            <div class="form-group">
                                <label for="">Job</label>
                                <input type="text" name="job" class="form-control" value="{{ $find->job }}">
                            </div>
                            <br>
                            <button class="btn btn-primary w-100" type="submit" name="edit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</body>

</html>
