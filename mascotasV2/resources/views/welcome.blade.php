<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda de Mascotas
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="text-center">
            <h1>Pet shop</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scoope="col">#</th>
                    <th scoope="col">Nombre</th>
                    <th scoope="col">Raza</th>
                    <th scoope="col">Edad</th>
                    <th scoope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                <!-- @csrf -->
                <tr>
                    <td>{{$pet->id}}</td>
                    <td>{{$pet->name}}</td>
                    <td>{{$pet->breed}}</td>
                    <td>{{$pet->age}}</td>
                    <td>
                        <form action="{{route('pets.destroy',$pet->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="ingresar">
            <form action="{{route('pets.store')}}" method="post">
                @csrf
                <label for="name" class="form-label">Nombre de la mascota: 
                    <input type="text" class="form-control" name="nombre" id="name">
                </label>
                <label for="breed" class="form-label">Raza de la mascota: 
                    <input type="text" class="form-control" name="raza" id="breed">
                </label>
                <label for="age" class="form-label">Edad de la mascota:
                    <input type="text" class="form-control" name="edad" id="age">
                </label>
                <button type="submit" class="btn btn-success">Insertar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>