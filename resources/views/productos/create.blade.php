@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>CrearProducto</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title" style="display: flex; flex-direction: row; gap: 3; font-weight: bolder; text-transform: uppercase;">Crear Producto</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('productos.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('productos.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
<!-- <script> console.log('Hi!'); </script> -->
@stop