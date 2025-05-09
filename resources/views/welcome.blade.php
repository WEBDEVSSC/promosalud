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

  <!-- Bootstrap 5 CDN (asegúrate de incluirlo en tu <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Secretaría de Salud de Coahuila de Zaragoza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (al final del body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Contenido de la página -->
    <div class="container">

      <div class="row mt-3">
        <div class="col-12 text-center">
          <img class="img-fluid" src="{{ asset('storage/IMG_3709.PNG') }}" alt="Card image cap" width="80%" class="img-thumbnail">
        </div>
      </div>

      <!-- Última fila de tarjetas -->
      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Campanas.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Campañas<br>.</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 17]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Dengue-Pagina.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">EL dengue es<br>cosa seria</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 18]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Portadas-Rikki2.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Rikki la garrapata <br> (Audio cuento , LSM)</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 19]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Portadas-Sofia.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Soffia cazadora de mosquitos<br> (Audio cuento , LSM)</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 20]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EstilosVida-Saludables.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Estilos de vida<br>saludables</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 1]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/LactanciaMaterna.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Lactancia<br>materna</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 2]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfCronicas-NoTransmisibles.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enf. crónicas<br>no transmisibles</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 3]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfTransmitidas-Vector.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enf. transmitidas<br>por vector</h5>              
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
              <h5 class="card-title">Enfermedades <br> zoonoticas</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 5]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/CambioClimatico.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Cambio <br> climático</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 6]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/SaludBucal.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Salud<br>bucal</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 7]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/SaludSexual-Reproductiva.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Salud sexual<br>y reproductiva</h5>              
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
              <h5 class="card-title">Cartilla nacional<br>de salud</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 9]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Cancer-Mujer.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Cáncer de<br>la mujer</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 10]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Adicciones.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Adicciones<br>.</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 11]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Enf-Alimentarias.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades<br>alimentarias</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 12]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <!-- ENFERMEDADES PREVENIBLES POR VACUNACION -->

      <!-- Última fila de tarjetas -->
      <div class="row mt-3">
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EnfPrevenibles-Vacunacion.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades prevenibles<br>por vacunación</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 13]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/Higiene.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Higiene<br>.</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 14]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/EDAS.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades<br>diarreicas agudas</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 15]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="{{ asset('storage/IRAS.png') }}" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Enfermedades<br>respiratorias</h5>              
              <a href="{{ route('detallesCategoria', ['id' => 16]) }}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      </div>

      <!-- CAMPAÑAS -->

      

      <!-- Cards con grupo de 4 -->

    </div><!-- DIV CONTAINER -->

    <!-- Enlace al JS de Bootstrap desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script personalizado -->
    <script src="assets/js/script.js"></script>
</body>
</html>
