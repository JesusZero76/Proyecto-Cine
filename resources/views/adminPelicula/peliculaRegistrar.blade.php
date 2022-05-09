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

<br>

</br>

@if(session('pelicula_g'))
<div class="alert alert-dark alert-dismissible fade show custom-modal" role="alert" style="border: solid 1px #000000">
    <strong>✔</strong> Se ha registrado la pelicula.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('pelicula_g')}}
</div>
@endif
	<!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Pelicula</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">FilxGo</a></li>
                    <li class="breadcrumb-item active">Pelicula</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
               
                    <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Nueva Pelicula</a>
               
                <div class="view-icons">
                    <a href="{{asset('/cartelera')}}" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                     <a href="{{asset('/pelicula/listar')}}" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Add Pelicula Modal -->

        <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" >
                    <div class="modal-header" >
                        <h5 class="modal-title">Add Client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <form id="id_form_registrar" method="POST" action="{{route ('guardar_pelicula')}}">
                            @csrf
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label  class="col-form-label">Fecha estreno</label>
                                            <input  class="form-control" style="border: solid 2px #000000"
                                                    type="date"
                                                    id="e1"
                                                    name="fecha_pelicula"
                                                    value="{{old('fecha_pelicula')}}">
        
                                                    @error('fecha_pelicula')
                                                        <h5 style="color: #ee0e0e">Se requiere la fecha</h5>
                                                    @enderror 
                                        </div>
                                    </div>
                         
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="col-form-label">Hora estreno</label>
                                        <input  class="form-control" style="border: solid 2px #000000"
                                                type="time"
                                                id="e1q"
                                                name="hora_pelicula"
                                                value="{{old('hora_pelicula')}}">
                                                
                                                @error('hora_pelicula')
                                                    <h5 style="color: #ee0e0e">Se requiere la hora</h5>
                                                    <h1 style="background: #aa4b6b;  /* fallback for old browsers */
                                                    background: -webkit-linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b);  /* Chrome 10-25, Safari 5.1-6 */
                                                    background: linear-gradient(to right, #3b8d99, #6b6b83, #aa4b6b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                                    "></h1>                                    
                                                @enderror
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="col-form-label">Pelicula</label>
                                        <input  class="form-control" style="border: solid 2px #000000"
                                                type="text"
                                                id="e1w"
                                                name="nombre_pelicula"
                                                placeholder="Ingrese pelicula"
                                                autocomplete="off"
                                                rows="4"
                                                value="{{old('nombre_pelicula')}}">
    
                                                @error('nombre_pelicula')
                                                    <h5 style="color: #ee0e0e">Se requiere el nombre</h5>
                                                @enderror
                                    </div>
                                </div>
    
                            <!--      <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Genero</label>
                                        <input class="form-control" 
                                               type="text"
                                               name="genero"
                                               placeholder="Ingrese genero"
                                               autocomplete="off">
                                    </div>
                                </div> -->
    
                              <div class="col-md-6">  
                                    <div class="form-group">
                                        <label class="col-form-label">Selecione Genero</label>
    
                                            <select id="e1e" name="genero" class="form-control" style="border: solid 2px #000000">
                                                <option>{{old('genero')}}</option>
                                                <option type="text">Accion</option>
                                                <option type="text">Ciencia Ficcion</option>
                                                <option type="text">Aventura</option>
                                                <option type="text">Horror</option>
                                                <option type="text">Comedia</option>
                                            </select>
                                            @error('genero')
                                                <h5 style="color: #ee0e0e">Se requiere genero</h5>
                                            @enderror
                                    </div>
                                </div>
                                
    
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <label class="col-form-label">Sinopsis</label>
                                        <textarea  class="form-control text-lelf" style="border: solid 2px #000000"
                                                    type="text"
                                                    id="e1r"
                                                 
                                                    name="resumen"
                                                    cols="30"  
                                                    rows="3">
                                                    {{old('resumen')}}
                                        </textarea>
    
                                        @error('resumen')
                                            <div>
                                                <h5 style="color: #ee0e0e">Se requiere sinopsis</h5>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
    
                               
    
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="col-form-label">Precio</label>
                                             <div class="input-group-prepend">
                                                <span class="input-group-text">$ .00</span> 
                                        
                                                    <input  class="form-control"style="border: solid 2px #000000"
                                                            id="e1t"
                                                            type="double"
                                                            name="precio"
                                                            placeholder="Ingrese precio"
                                                            autocomplete="off"
                                                            value="{{old('precio')}}">
                                                </div> 
                                                    @error('precio')
                                                        <h5 style="color: #ee0e0e">Se requiere precio</h5>
                                                    @enderror
                                                </div>      
                                    </div>
                                </div>
    
                            <div class="submit-section">
                                <button type="submit" id="c" class="btn btn-primary submit-btn">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <div id="respuesta"></div>
                </div>
            </div>
        </div>


    <!-- /Add Pelicula Modal -->
@endsection


@section('script')

<script>

    $("#id_form_registrar").submit(function(e){
        e.preventDefault();
        var fun = "id_form_registrar";
        var fecha_pelicula = $("#fecha_pelicula").val();
        var hora_pelicula = $("#hora_pelicula").val();
        var nombre_pelicula = $("#nombre_pelicula").val();
        var genero = $("#genero").val();
        var resumen = $("#resumen").val(); 
        var precio = $("#precio").val();

        if(fecha_pelicula =='') {
            setTimeout(function(){
                $("#e1").html("<span style='color: blue;'>Complete</span>")
            }1000);
            $("#fecha_pelicula").focus();
            return false;
        } else {
            $.ajax({
                url:"guardar_pelicula",
                method:"POST",

                data:{"funcion":fun, "fecha_pelicula":fecha_pelicula,"hora_pelicula":hora_pelicula,"nombre_pelicula":nombre_pelicula,"genero":genero,"resumen":resumen,"precio":precio}, 
                success: function(data) {
                    $("#add_client").modal('hide');
                    $("#respuesta").html(data);
                    $("#id_form_registrar").trigger('reset');
                }
                });
        
        }
    }

    
</script>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

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

@endsection