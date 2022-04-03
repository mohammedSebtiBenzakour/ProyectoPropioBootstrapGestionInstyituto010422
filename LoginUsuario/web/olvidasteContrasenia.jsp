<%-- 
    Document   : olvidasteContrasenia
    Created on : 31-dic-2021, 20:10:46
    Author     : daw2
--%>

<%@page contentType="text/html" pageEncoding="iso-8859-1"%>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1">
        <link href="css/estiloForgotPassword.css" rel="stylesheet" type="text/css"/>
        <title>Forgot Password JSP</title>
    </head>
    <body>
    <center>
        <h1>Forgot Password</h1>
        <h3>Alguna vez funciona otras veces no estoy intentando saber porque ?</h3>
        <form action="forgot-process.jsp" method="post"><br><br>
            Enter Email ID:<input type="text" name="email" /><br><br>

            <input type="hidden" value="1" name="hidden"> 
            <input type="submit" name="send" value="Enviar datos" />
        </form>
        <h2><a href="index.jsp">Volver</a><br></h2>
    </center>
</body>
</html>