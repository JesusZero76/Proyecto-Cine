@include('adminplantilla.header')

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper" >
    
        <!-- Header -->
        <div class="header">
        
            <!-- Logo -->
           
            <!-- /Logo -->
            
            <!-- Header Title -->
            <div class="page-title-box">
                <span>
                    <a id="toggle_btn" href="javascript:void(0);"> 
                        <span class="bar-icon"> 
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                            </span> <span><h3 style="font-size: 23px">FlixGo</h3></span>
                    </a>
            </div>
            <!-- /Header Title -->
            
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            
            
          
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        @include('adminplantilla.menu')
        
        <!-- /Sidebar -->
        
        <!-- Page Wrapper -->
        <div class="page-wrapper">
        
            <!-- Page Content -->
            <div class="content container-fluid">
            
                <!-- Page Header -->
                
                <!-- /Page Header -->
            
                @yield('contenido')

                
            
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->
    
    @include('adminplantilla.thescripts')
    
</body>
</html>