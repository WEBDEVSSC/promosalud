@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Nuevo contenido</strong></h1>
@stop

@section('content')
    

    <div class="card">
        <div class="card-header">
            <a href="{{ route('contenidosIndex') }}" class="btn btn-success btn-sm">PANEL DE CONTROL</a>
        </div>
        <div class="card-body">

        <form action="{{ route('contenidosStore') }}" method="POST" enctype="multipart/form-data">
    
        @csrf

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nombre</strong></p>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                </div>
                <div class="col-md-6">
                    <p><strong>Categoría</strong></p>
                    <select name="categoria_id" id="categoria" class="form-control">
                        <option value="">Selecciona una categoría</option>
                        
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" 
                                    {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->categoria }} - {{ $categoria->opcion }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>    
            
            <!-- ------------------------------------------------- -->
            
            <div class="row mt-3">
                <div class="col-md-12">
                    <p><strong>Archivo</strong> <small>(jpg,jpeg,png,pdf)</small></p>
                    <input type="file" name="archivo" id="archivo" class="form-control-file">
                </div>
            </div>     

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success btn-sm">REGISTRAR DATOS</button>
        </div>
    </div>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop