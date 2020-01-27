@extends("theme.$theme.layout")
@section('titulo')
Sistema de Menús
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form_error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <!-- box-tittle -->
            <div class="box-header with-border">
                <h3 class="box-title">Crear menús</h3>
            </div>
            <!-- /.box-tittle -->

            <!-- form start -->
        <form class="form-horizontal" action="{{route('guardar_menu')}}" id="form_general" method="POST">
            @csrf
                <!-- box-body -->
                <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <!-- /.box-body -->

                <!-- box-footer -->
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                         @include('includes.boton_form_crear')
                    </div>
                </div>
                <!-- /.box-footer -->
        </form>
        </div>       
    </div>
</div>    
@endsection