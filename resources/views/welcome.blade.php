<!DOCTYPE html>
<html lang="en">
@include('adminplantilla.header')

<body class="account-page">
	
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <!-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
                 <div class="container"> -->
            
                <!-- Account Logo -->
            <!--	<div class="account-logo">
                    <a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
                </div> -->
                <!-- /Account Logo -->
                
                <div class="account-box" style="background-color: rgb(177, 177, 177)">
                    <div class="account-wrapper">
                        
                        <h2 class=" text-center">FlixGo</h2>
                        <!-- <p class="account-subtitle">Access to our dashboard</p> -->
                        
                        <!-- Account Form -->
                        <form action="{{url('/menu')}}">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label><span><h4><i class="las la-user-cog"></i> Usuario</h4></span></label>
                                    </div>
                                </div>
                                
                                <input class="form-control" 
                                       type="nombre_usuario"
                                       autocomplete="off"
                                       placeholder="Ingrese nombre">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label><span><h4><i class="la la-key"></i> Contraseña</h4></span></label>
                                    </div>
                                </div>
                                
                                <input class="form-control"
                                       type="password"
                                       autocomplete="off"
                                       placeholder="Ingrese contraseña">
                            </div>
                            

                            <div class="form-group text-center ">
                                <button class="btn btn-primary account-btn" type="submit" >Siguiente</button>
                            </div>

                            <div class="account-footer">
                                <!--<p>Don't have an account yet? <a href="register.html">Register</a></p> -->
                            </div>
                        </form>
                        <!-- /Account Form -->
            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
    
</body>
</html>