@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>PERMISO</th>
                        <th>SLUG</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>       
    </div>
</div>    
@endsection