@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalerts2', true)

@section('content_header')
    <h1><strong>Contenidos descargables</strong></h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('contenidosCreate') }}" class="btn btn-success btn-sm">NUEVO REGISTRO</a>
        </div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>                        
                        <th>Contador</th>
                        <th>Fecha</th>
                        <th>Archivo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contenidos as $contenido)
                        <tr>
                            <td>{{ $contenido->nombre }}</td>
                            <td>{{ $contenido->categoria_label }}</td>
                            <td>{{ $contenido->contador }}</td>
                            <td>{{ $contenido->created_at->format('d-m-Y') }}</td>
                            <td>                                
                                <a href="{{ asset('storage/' . $contenido->archivo) }}" class="btn btn-primary btn-sm btn-block" download>Descargar Archivo</a>

                                <hr>

                                <form action="{{ route('contenidosDelete', $contenido->id) }}" method="POST" class="form-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger btn-block">Eliminar</button>
                                </form>

                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            

        </div>
        <div class="card-footer"></div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- Tu código para mostrar la alerta -->
     <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: "{!! addslashes(session('success')) !!}",
                showConfirmButton: true
            });
        @endif
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const forms = document.querySelectorAll('.form-eliminar');
    
        forms.forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Detener el envío inmediato
    
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "Esta acción no se puede deshacer.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Enviar el formulario si el usuario confirma
                    }
                });
            });
        });
    });
    </script>
@stop