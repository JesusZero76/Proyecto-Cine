@extends('layouts.base')
@extends('principal')

@section('css')
<!-- Datatable CSS -->
<link rel="stylesheet" href="{{asset('plantilla/css/dataTables.bootstrap4.min.css')}}">
		
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('plantilla/css/select2.min.css')}}">

<!-- Data Table
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
-->
@endsection

@section('contenido')

<div class="card">
  <div class="card-body">
    <table id="usuario" class="table table-striped text-center" >
      <thead>
          <tr>
    
              <th>Nombre</th></th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>Direccion</th>
              <th class="text-right">Accion></th>
          </tr>
      </thead>
      <tbody>
        @foreach($user_cliente as $user_c)
          <tr>
            
            <td>{{$user_c->nombre}}</td>
            <td>{{$user_c->apellido}}</td>
            <td>{{$user_c->cedula}}</td>
            <td>{{$user_c->direccion}}</td>
          
          <form action="{{ route('deleter', $user_c->id) }}" method="POST">
            @csrf
              <td>
                <a href="{{ route ('modificarr', $user_c->id) }}" class="btn btn-primary  ">
                  <i class="fas fa-pencil-alt "></i>
              </a>
               <button type="submit" onclick="return confirm('Eliminar')" class="btn btn-danger ">
              <i class="fa fa-trash"></i>
              </button>

            @csrf @method('DELETE')
          </form>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

@section('script')

<!-- Datatable JS 
<script src="{{asset('plantilla/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plantilla/js/dataTables.bootstrap4.min.js')}}"></script> -->

<!-- Bootstrap Core JS -->
<script src="{{asset('plantilla/js/popper.min.js')}}"></script>
<script src="{{asset('plantila/js/bootstrap.min.js')}}"></script>

<!-- Select2 JS -->
<script src="{{asset('plantilla/js/select2.min.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<!-- DataTable -->
<script>
  $(document).ready(function(){
    $('#usuario').DataTable({
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "Todo"]],
    responsive: true,
    autoWidth: false,
  });
  });
  
</script>
@endsection

