<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    </head>
    <body>
        <h1>Clientes</h1>

        <a href="{{ route('cliente.create') }}" class="btn btn-success btn-sm">Agregar</a>
        <br>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombres</th>
                    <th>pri_ape</th>
                    <th>seg_ape</th>
                    <th>tipo_doc</th>
                    <th>docu_tip</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $key => $cliente)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->pri_ape }}</td>
                    <td>{{ $cliente->seg_ape }}</td>
                    <td>{{ $cliente->docu_tip }}</td>
                    <td>{{ $cliente->docu_num }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('cliente.delete', $cliente->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>