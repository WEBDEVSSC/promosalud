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
                        <th>Archivo</th>
                        <th>Contador</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contenidos as $contenido)
                        <tr>
                            <td>{{ $contenido->nombre }}</td>
                            <td>{{ $contenido->categoria_label }}</td>
                            <td>                                
                                <a href="{{ asset('storage/' . $contenido->archivo) }}" class="btn btn-primary btn-sm" download>Descargar Archivo</a>
                            </td>
                            <td>{{ $contenido->contador }}</td>
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
@stop