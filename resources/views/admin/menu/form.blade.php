      <!-- campo nombre -->
        <div class="form-group">
          <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
          <div class="col-lg-8">
          <input type="text" id="nombre" name="nombre" class="form-control"  value="{{old('nombre')}}">
          </div>
        </div>
         <!-- /campo nombre -->

         <!-- campo URL -->
        <div class="form-group">
            <label for="url" class="col-lg-3 control-label requerido">URL</label>
            <div class="col-lg-8">
              <input type="text" id="url" name="url" class="form-control"   value="{{old('url')}}">
            </div>
        </div>
         <!-- /campo URL -->

        <!-- campo Icono --> 
        <div class="form-group">
          <label for="icono" class="col-lg-3 control-label">Icono</label>
          <div class="col-lg-8">
            <input type="text" id="icono" name="icono" class="form-control"  value="{{old('icono')}}">
          </div>
        </div>
         <!-- /campo icono -->
  