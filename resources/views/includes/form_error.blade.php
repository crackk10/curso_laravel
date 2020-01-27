@if($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-ban"></i>Problemas en el formulario </h4>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
  </div>
@endif