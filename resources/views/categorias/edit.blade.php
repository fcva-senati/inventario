<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('categorias.update') }}" method="post">

                @csrf

                <input type="hidden" name="id" value="{{ $categoria->id }}">

                <label for="">Nombres</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" autocomplete="off" required>
                                      
                <label for="">Descripción</label>
                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" autocomplete="off">

                <button type="submit">Guardar</button>
            </form>
        </pre>
    </body>
</html>