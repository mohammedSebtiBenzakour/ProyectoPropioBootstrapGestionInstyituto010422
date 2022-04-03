<%-- 
    Document   : verificacionEmailRespuesta
    Created on : 01-ene-2022, 15:28:17
    Author     : daw2
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <title>verificacionEmailRespuesta</title>
    </head>
    <body>
      <center>
        <div class="container">
            <div class="regbox box">
                <img class="avatar" src="img/user-avatar.png">
                <h1>Verificacion del Email con codigo de verificacion</h1>
                <h3>Ya hemos enviando el codigo de verificacion a tu email.</h3>
                <form action="VerificacionCodigoServlet" method="post">
                    <p>Codigo de verificacion</p>
                    <input type="text" placeholder="Codigo de verificacion" name="codigoVerificacion"  autocomplete="off">
                    <input type="submit" value="Verificar codigo">
                    <a href="index.jsp">Volver</a><br>
                    <a href="cerrarSession.jsp">Cerrar session</a>
                </form>
            </div>
        </div>
        <!--        <h2><a href="registrarse.jsp">Ir a registrarse</a></h2>-->
    </center>
    </body>
</html>
