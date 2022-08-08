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
        <h1 class="mt-4">CRUD</h1>
        <hr>
        <div class="row">
            @if (session('success'))
                <h2 class="text-light bg-success w-100 text-center mt-2 mb-2">{{ session('success') }}</h2>
            @endif
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Age</th>
                            <th scope="col">Job</th>
                            <th scope="col">Create time</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        ?>
                        @foreach ($show as $row)
                            <tr>
                                <th scope="row">{{ $show->firstItem()+$loop->index}}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->surname }}</td>
                                <td>{{ $row->age }}</td>
                                <td>{{ $row->job }}</td>
                                <td>{{ $row->created_at->diffforhumans() }}</td>
                                <td><a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary w-100">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('fix', $row->id) }}" class="btn btn-danger w-100">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $show->links('pagination::bootstrap-4')}}
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Form
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('crud.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Lastname</label>
                                    <input type="text" name="surname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="number" name="age" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Job</label>
                                    <input type="text" name="job" class="form-control">
                                </div>
                                <br>
                                <button class="btn btn-primary w-100" type="submit" name="save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
