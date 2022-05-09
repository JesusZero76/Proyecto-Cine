@extends('layouts.base')
@extends('principal')

@section('css')
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('plantilla/plugins/css/select2.min.css')}}">

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{asset('plantilla/css/bootstrap-datetimepicker.min.css')}}">
		
<!-- Tagsinput CSS -->
<link rel="stylesheet" href="{{asset('plantilla/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
@endsection

@section('contenido')

<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Usuario</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Usuario</li>
            </ul>
        </div>
        <div class="col-auto float-right ml-auto">
            
            <div class="view-icons">
                <a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                <a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Add Client Modal -->
<div id="add_client" class="custom-modal" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content" style="border: solid 2px #000000">
            
            <div class="modal-header">
                <h5 class="modal-title">Usuario</h5> 
            </div>

            <div class="modal-body">

                <form method="POST" action="{{route ('guardar_usuario_persona')}}">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group" >
                                <label class="col-form-label">Nombre</label>
                                <input class="form-control" style="border: solid 2px #000000"
                                       type="text"
                                       name="nombre"
                                       placeholder="Ingrese nombre"
                                       autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Apellido</label>
                                <input class="form-control" style="border: solid 2px #000000"
                                       type="text"
                                       name="apellido"
                                       placeholder="Ingrese apellido"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">  
                            <div class="form-group">
                                <label class="col-form-label">Cedula</label>
                                <input class="form-control" style="border: solid 2px #000000"
                                       type="text"
                                       name="cedula"
                                       placeholder="Ingrese cedula"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Direccion</label>
                                <input class="form-control" style="border: solid 2px #000000"
                                       type="text"
                                       name="direccion"
                                       placeholder="Ingrese direccion"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Nombre usuario</label>
                                <input class="form-control" style="border: solid 2px #000000" 
                                       type="text"
                                       name="nombre_usuario"
                                       placeholder="Ingrese usuario"
                                       autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Contaseña</label>
                                <input class="form-control" style="border: solid 2px #000000"
                                       type="password"
                                       name="password"
                                       placeholder="Ingrese contraseña"
                                       autocomplete="off">
                            </div>
                        </div>

                        <!--<div class="col-md-6" >  
                            <div class="form-group" >
                                <label class="col-form-label">Tipo</label>
                                
                                    <select name="id_tipo" id="id_tipo" class="form-control" style="border: solid 2px #000000">
                                       @foreach($tipos as $tipo)
                                        <option value="{{$tipo['id_tipo']}} ">{{$tipo['nombre_tipo']}}</option>

                                        @endforeach
                                    </select>     
                            </div>
                        </div> -->
                          
                    </div>

                    <!-- Para mostrar si es usuario o cliente -->
                    
                    <!-- <span id="op1"></span> -->
                    
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn" name="agendado">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Client Modal -->

@endsection


@section('script')

<!-- Select2 JS -->
<script src="{{asset('plantilla/js/select2.min.js')}}"></script>

<!-- Datetimepicker JS -->
<script src="{{asset('plantilla/js/moment.min.js')}}"></script>
<script src="{{asset('plantilla/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Tagsinput JS -->
<script src="{{asset('plantilla/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

<!-- Sticky JS -->
<script src="{{asset('plantilla/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

<!--
<script>

$('#tipo_per').change(function(e){
    e.preventDefault();
    debugger    
    var id = $(this).val();

    if(id=="Cliente"){

    $('#op1').html(`

        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="nombre"
                                           placeholder="Ingrese nombre"
                                           autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Apellido</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="apellido"
                                           placeholder="Ingrese apellido"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Cedula</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="cedula"
                                           placeholder="Ingrese cedula"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Direccion</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="direccion"
                                           placeholder="Ingrese direccion">
                                </div>
                            </div>
      
        </div>
                          
        `) } else {

        $('#op1').html("");

        $('#op1').html(`

        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nombre usuario</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="nombre_usuario"
                                           placeholder="Ingrese usuario"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Contaseña</label>
                                    <input class="form-control" 
                                           type="password"
                                           name="password"
                                           placeholder="Ingrese contraseña"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Confirme contraseña</label>
                                    <input class="form-control" 
                                           type="password"
                                           name="password"
                                           placeholder="Confirme contraseña"
                                           autocomplete="off">
                                </div>
                            </div>
        </div>

        `)  }
})
</script>
-->

@endsection