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
            <h3 class="page-title">Pelicula</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">FilxGo</a></li>
                <li class="breadcrumb-item active">Pelicula</li>
            </ul>
        </div>

    </div>
</div>

@if(session('peliculaGuardado'))
<div class="alert alert-light alert-dismissible fade show custom-modal" role="alert" style="border: solid 2px #000000">
    <strong>✔</strong> Se ha registrado la pelicula.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('peliculaGuardado')}}
</div>
@endif

    <!-- Add Pelicula Modal -->
    <div id="add_client" class="custom-modal" role="dialog">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content" style="border: solid 2px #000000">
                <div class="modal-header">
                    <h5 class="modal-title">Pelicula</h5>
                  
                </div>
                <div class="modal-body">

                    <form action="{{ route('editar', $user_pelicula->id) }}" method="POST">
                        @csrf @method('PATCH')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Fecha estreno</label>
                                    <input class="form-control"
                                           type="date"
                                           name="fecha_pelicula"
                                           value="{{$user_pelicula->fecha_pelicula}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Hora estreno</label>
                                    <input class="form-control" 
                                           type="time"
                                           name="hora_pelicula"
                                           value="{{$user_pelicula->hora_pelicula}}">
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Pelicula</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="nombre_pelicula"
                                           value="{{$user_pelicula->nombre_pelicula}}"
                                           placeholder="Ingrese pelicula"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label for="" class="col-form-label">Genero</label>
                                    
                                        <select name="genero" class="form-control" >
                                            <option>{{$user_pelicula->genero}}</option>
                                            <option type="text">Accion</option>
                                            <option type="text">Ciencia Ficcion</option>
                                            <option type="text">Horror</option>
                                            <option type="text">Comedia</option>
                                        </select>
                                    
                                </div>
                            </div> 

                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label for="" class="col-form-label">Resumen</label>
                                    <input class="form-control" 
                                           type="text"
                                           name="resumen"
                                           value="{{$user_pelicula->resumen}}"
                                           placeholder="Ingrese resumen"
                                           autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="" class="col-form-label">Precio</label>
                                <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>

                                        <input class="form-control" 
                                           type="double"
                                           name="precio"
                                           value="{{$user_pelicula->precio}}"
                                           placeholder="Ingrese precio"
                                           autocomplete="off">

                                    <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
  
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Modficar</button>  
                                <span>
                                    <button type="submit" class="btn btn-primary submit-btn" href="{{asset('adminPelicula.peliculaListar')}}">Regresar</button>
                                </span>           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Pelicula Modal -->
@endsection


@section('script')

<!-- Select2 JS -->
<script src="{{asset('plantilla/js/select2.min.js')}}"></script>

<!-- Datetimepicker JS -->
<script src="{{asset('plantilla/js/moment.min.js')}}"></script>
<script src="{{asset('plantilla/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Tagsinput JS -->
<script src="{{asset('plantilla/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>


<script src="{{asset('plantilla/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

<!-- Sticky JS -->
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