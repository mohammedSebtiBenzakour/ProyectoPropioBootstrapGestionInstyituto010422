<%-- 
    Document   : verificacionEmail
    Created on : 01-ene-2022, 14:53:58
    Author     : daw2
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <title>Verificacion del Email</title>
    </head>
    <body>
    <center>
        <div class="container">
            <div class="regbox box">
                <img class="avatar" src="img/user-avatar.png">
                <h1>Verificacion del Email</h1>
                <form action="VerificacionEmailServlet" method="post">
                    <p>Nombre usuario</p>
                    <input type="text" placeholder="Nombre usuario" name="nombreUsuario"  autocomplete="">
                    <p> Email</p>
                    <input type="text" placeholder="email" name="emailUsuario"  autocomplete="">
                    <input type="submit" value="Verificar">
                    <a href="index.jsp">Volver</a><br>
                    <a href="cerrarSession.jsp">Cerrar session</a>
                </form>
            </div>
        </div>
        <!--        <h2><a href="registrarse.jsp">Ir a registrarse</a></h2>-->
    </center>
</body>
</html>
