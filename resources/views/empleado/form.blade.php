    <h1>{{$modo}} empleado</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">

        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" name="Nombre" id="Nombre">
        <br>
    </div>

    <div class="form-group">

        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input class="form-control" type="text" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
        <br>
    </div>

    <div class="form-group">
        
        <label for="Apellido Materno">Apellido Materno</label>
        <input class="form-control" type="text" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
        <br>
    </div>
    
    <div class="form-group">

        <label for="Correo">Correo</label>
        <input class="form-control" type="text" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo">
        <br>
    </div>

    <div class='form-group'>

        @if(isset($empleado->Foto ))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}"  height="200" alt="">
        @endif
        <input class="form-control" type="file" name="Foto" value="{{isset($empleado->Foto)?$empleado->Foto:''}}" id="Foto">
        <br>
    </div>
    <input class="btn btn-primary" type="submit" value="{{$modo}}">

    <a href="{{url('empleado/')}}" class="btn btn-danger">Inicio</a>
