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
          <img class="img-fluid" src="{{ asset('storage/IMG_3709.png') }}" alt="Card image cap" width="80%">
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EstilosVida-Saludables.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Estilos de Vida Saludables</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 1]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/LactanciaMaterna.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Lactancia Materna</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 2]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfCronicas-NoTransmisibles.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enf. Crónicas no Transm.</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 3]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfTransmitidas-Vector.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enf. Transmitidas por Vector</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 4]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Repetir para el resto de las filas de tarjetas -->
      
      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfZoonoticas.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades <br> Zoonoticas</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 5]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/CambioClimatico.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Cambio <br> Climático</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 6]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/SaludBucal.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Salud <br> Bucal</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 7]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/SaludSexual-Reproductiva.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Salud Sexual y Reproductiva</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 8]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Última fila de tarjetas -->
      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/CNS.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Cartilla Nacional de Salud</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 9]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Cancer-Mujer.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Cáncer de la mujer</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 10]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Adicciones.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Adicciones</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 11]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Enf-Alimentarias.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades alimentarias</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 12]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Cards con grupo de 4 -->
      <div class="row mt-3">
        <div class="col-12">
            <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">Enfermedades prevenibles por vacunación</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 13]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">Higiene</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 14]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">Enfermedades diarreicas agudas</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 15]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">Enfermedades respiratorias</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 16]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                
            </div>
        </div>
      </div>

      <!-- Cards con grupo de 4 -->
      <div class="row mt-3">
        <div class="col-12">
            <div class="card-group">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">Campañas</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 17]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">.</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 17]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">.</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 17]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Mi Imagen">
                  <div class="card-body text-center">
                    <h5 class="card-title">.</h5>
                    <a href="{{ route('detallesCategoria', ['id' => 17]) }}" class="btn btn-primary">Más información</a>
                  </div>
                </div>
            </div>
        </div>
      </div>

    </div><!-- DIV CONTAINER -->

    <!-- Enlace al JS de Bootstrap desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script personalizado -->
    <script src="assets/js/script.js"></script>
</body>
</html>
