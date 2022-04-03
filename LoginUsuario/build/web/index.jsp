<%-- 
    Document   : index
    Created on : 30-dic-2021, 22:59:40
    Author     : daw2
--%>



<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/estiloInicial.css" rel="stylesheet" type="text/css"/>
        <link href="css/estiloNuevoFormularioReg.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/estiloNuevoFormularioReg.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link href="css/estiloNuevoFormularioReg.css" rel="stylesheet" type="text/css"/>

        <title>Web registro</title>
    </head>
    <body>
    <center>
        <header class="container pt-2">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Identificarse para acceder a la biblioteca</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#"></a></li>
                                        <li><a class="dropdown-item" href="#"></a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container navbar-light bg-light">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://localhost/ProyectoPropioBootstrapGestionInstyituto160222\ProyectoPropioBootstrapGestionInstyituto/indexNuevo.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="http://localhost/ProyectoPropioBootstrapGestionInstyituto160222\ProyectoPropioBootstrapGestionInstyituto/indexNuevo.html">Administración</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Acceder a la Biblioteca</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class="regbox box">
                <img class="avatar" src="img/user-avatar.png">
                <h1>Registrarse</h1>
                <form action="ServletLogin" method="post">
                    <p>Email usuario</p>
                    <input type="text" placeholder="email" name="email" required autocomplete="off">
                    <p> Password</p>
                    <input type="password" placeholder="Password" name="password" required autocomplete="off">
                    <input type="submit" value="Login">
                    <div class="span"><a href="olvidasteContrasenia.jsp">Olvidaste la contraseña?</a></div>
                    <div class="span"><a  href="registrarse.jsp">Already have Account?</a></div>
                    <div class="span"><a  href="cambiarContrasenia.jsp">Cambiar Contraseña</a></div>
                    <div class="span"><a href="verificacionEmail.jsp">Verificacion del Email</a></div>
                    <div class="span"><a href="cerrarSession.jsp">Cerrar session</a></div>
                    <div class="span"><a href="index.jsp">Volver</a></div>
                </form>
            </div>
        </div>
        <!--div class="container">
            <div id="main-container" class="container-fluid">
                <div class="row">
                    <div id="auth-form" class="card border-primary">
                        <h1 class="card-header bg-primary text-white">
                            Registrarse</h1>
                        <div class="card-body">
                            <form class="panel-body" action="ServletLogin" method="post">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <label>Email usuario</label>
                                    </span>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="email" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <label>Password</label>
                                    </span>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="olvidasteContrasenia.jsp" class="btn btn-primary">Olvidaste la contraseña?</a>
                                <a href="registrarse.jsp" class="btn btn-primary">Already have Account?</a><br><br>
                                <a href="cambiarContrasenia.jsp" class="btn btn-warning">Cambiar Contraseña</a><br><br>
                                <a href="verificacionEmail.jsp" class="btn btn-danger">Verificacion del Email</a><br><br>
                                <a href="cerrarSession.jsp" class="btn btn-primary">Cerrar session</a> 
                                <a href="index.jsp" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div -->
        <!--        <h2><a href="registrarse.jsp">Ir a registrarse</a></h2>-->
        <script src="js/bootstrap.bundle.min.js"></script>
    </center>
</body>
</html>
