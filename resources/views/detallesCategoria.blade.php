<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoción de la Salud</title>

    <!-- Enlace al CSS de Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Contenido de la página -->
    <div class="container">

        <div class="row mt-3">
            <div class="col-12 text-center">
              <img class="img-fluid" src="{{ asset('storage/IMG_3709.PNG') }}" alt="Card image cap" width="80%">
            </div>
          </div>

          <br>
          <br>

        <!-- Tabla de Categorías -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Contenido</th>
                    <th>Categoria</th>
                    <th>Fecha de publicación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoria as $cat)
                    <tr>
                        <td>{{ $cat->nombre }}</td>
                        <td>{{ $cat->categoria_label }}</td>
                        <td>{{ $cat->created_at }}</td>
                        <td><a href="{{ asset('storage/' . $cat->archivo) }}" class="btn btn-primary btn-sm" download>Descargar Archivo</a></td> 
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- DIV CONTAINER -->

    <!-- Enlace al JS de Bootstrap desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script personalizado -->
    <script src="assets/js/script.js"></script>
</body>
</html>
