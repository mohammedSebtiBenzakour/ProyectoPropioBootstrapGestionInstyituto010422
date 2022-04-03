<%-- 
    Document   : registrarse
    Created on : 30-dic-2021, 23:01:12
    Author     : daw2
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <title>Registrarse</title>
    </head>
    <body>
    <center>

        <div class="container">
            <div class="regbox box">
                <img class="avatar" src="img/collaboration.png">
                <h1>Registrarse</h1>
                <form action="ServletRegistrar" method="post">
                    <p>Nombre usuario</p>
                    <input type="text" placeholder="usuario" name="nombre" required autofocus="" autocomplete="off">
                    <p>Email</p>
                    <input type="text" placeholder="email" name="email" required autocomplete="off">
                    <p>Password</p>
                    <input type="password" placeholder="Password" name="password" required autocomplete="off">
                    <input type="submit" value="Registrarse">
                    <a href="registrarse.jsp">Already have Account?</a><br>
                    <a href="index.jsp">Volver</a>
                </form>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </center>
</body>
</html>
