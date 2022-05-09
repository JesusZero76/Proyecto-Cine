<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

           

                        <li > 
                            <a href="{{url('/cartelera')}}"></a>
                        </li>
                        
                        

                <li class="menu-title"> 
                    <span>--------------------------------------</span>
                </li>
              
                <li class="submenu">
                    <a href="#"><i class="la la-film"></i><span> Registro Pelicula</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li > 
                            <a href="{{url('/pelicula')}}"><span> Pelicula</span></a>
                        </li>
                        
                        <li>
                            <a href="{{url('/pelicula/listar')}}"><span> Listar Peliculas</span></a>
                        </li> 

                    </ul>
                </li>

                <li class="menu-title">
                    <span>--------------------------------------</span>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-user-edit"></i><span> Registro Cliente</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li> 
                            <a href="{{url('/persona')}}"><span> Cliente</span></a>
                        </li>

                        <li>
                            <a href="{{url('/usuario')}}"><span> Usuario</span> </a>
                        </li>

                        <li>
                            <a href="{{url('/listar/cliente')}}"><span> Listar Cliente</span> </a>
                        </li> 

                        
                    </ul>
                </li>

                <li class="menu-title"> 
                    <span>--------------------------------------</span>
                </li>

                
             
            </ul>
        </div>
    </div>
</div>