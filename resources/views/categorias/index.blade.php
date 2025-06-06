<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categorias</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
    <body>
        <h1>Categorias</h1>

        <a href="{{ route('categorias.create') }}" class="btn btn-success btn-sm">Agregar</a>
        <br>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $key => $categoria)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger btn-sm">
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>