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
            <h3 class="page-title">Cliente</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Cliente</li>
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

@if(session('personaGuardado'))
<div class="alert alert-light alert-dismissible fade show custom-modal" role="alert" style="border: solid 2px #000000">
    <strong>✔</strong> Se ha registrado correctamente.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('personaGuardado')}}
</div>
@endif



    <!-- Add Client Modal -->
    <div id="add_client" class="custom-modal" role="dialog">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content" style="border: solid 2px #000000">
                
                <div class="modal-header">
                    <h5 class="modal-title">Cliente</h5> 
                </div>

                <div class="modal-body">

                    <form method="POST" action="{{route ('guardar_persona')}}">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group" >
                                    <label  class="col-form-label">Nombre</label>
                                    <input  class="form-control" style="border: solid 2px #000000"
                                            type="text"
                                            name="nombre"
                                            value="{{old('nombre')}}"
                                            placeholder="Ingrese nombre"
                                            autocomplete="off">

                                            @error('nombre')
                                                <h5 style="color: #ee0e0e">Se requiere el nombre</h5>
                                            @enderror 
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Apellido</label>
                                    <input class="form-control" style="border: solid 2px #000000"
                                           type="text"
                                           name="apellido"
                                           value="{{old('apellido')}}"
                                           placeholder="Ingrese apellido"
                                           autocomplete="off">

                                            @error('apellido')
                                                <h5 style="color: #ee0e0e">Se requiere el apellido</h5>
                                            @enderror
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Cedula</label>
                                    <input class="form-control" style="border: solid 2px #000000"
                                           type="text"
                                           name="cedula"
                                           value="{{old('cedula')}}"
                                           placeholder="Ingrese cedula"
                                           autocomplete="off">

                                            @error('cedula')
                                                <h5 style="color: #ee0e0e">Se requiere la cedula</h5>
                                            @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Direccion</label>
                                    <input class="form-control" style="border: solid 2px #000000"
                                           type="text"
                                           name="direccion"
                                           value="{{old('direccion')}}"
                                           placeholder="Ingrese direccion"
                                           autocomplete="off">

                                            @error('direccion')
                                                <h5 style="color: #ee0e0e">Se requiere la direccion</h5>
                                            @enderror
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
                            
                            <input type="hidden" name="id_tipo" value="1">
                            
                        </div>

                        <!-- Para mostrar si es usuario o cliente -->
                        
                        <!-- <span id="op1"></span> -->
                        
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn" name="agendado">Registrar</button>
                        </div>
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

<script>
$(".header").stick_in_parent({
  
});
// This is for the sticky sidebar    
$(".stickyside").stick_in_parent({
  offset_top: 60
});
$('.stickyside a').click(function() {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top - 60
  }, 500);
  return false;
});
// This is auto select left sidebar
// Cache selectors
// Cache selectors
var lastId,
  topMenu = $(".stickyside"),
  topMenuHeight = topMenu.outerHeight(),
  // All list items
  menuItems = topMenu.find("a"),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function() {
    var item = $($(this).attr("href"));
    if (item.length) {
      return item;
    }
  });

// Bind click handler to menu items

// Bind to scroll
$(window).scroll(function() {
  // Get container scroll position
  var fromTop = $(this).scrollTop() + topMenuHeight - 250;

  // Get id of current scroll item
  var cur = scrollItems.map(function() {
    if ($(this).offset().top < fromTop)
      return this;
  });
  // Get the id of the current element
  cur = cur[cur.length - 1];
  var id = cur && cur.length ? cur[0].id : "";

  if (lastId !== id) {
    lastId = id;
    // Set/remove active class
    menuItems
      .removeClass("active")
      .filter("[href='#" + id + "']").addClass("active");
  }
});
</script>

<!--
<script>

    $('#id_tipo').change(function(e){
        e.preventDefault();
        debugger    
        var id = $(this).val();
    
        if(id=="Usuario"){
    
        $('#op1').html(`
    
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
                              
            `) } 
    })
    </script>
-->    

@endsection