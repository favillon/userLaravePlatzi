<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Users Laravel</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('users.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nombre">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                                </div>
                                <div class="col-sm-3">
                                    <input type="password"name="password" class="form-control" value="{{old('password')}}" placeholder="Password">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary"> Crear Usuario</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)                            
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                        <input 
                                            type="submit" value="Eliminar" class="btn btn-danger"
                                            onclick="return confirm('Deseo Eliminar el usuario')"
                                        >
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </body>
</html>