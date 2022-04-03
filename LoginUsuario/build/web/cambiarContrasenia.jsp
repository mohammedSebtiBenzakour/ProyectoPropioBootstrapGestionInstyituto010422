<%-- 
    Document   : cambiarContrasenia
    Created on : 31-dic-2021, 21:39:13
    Author     : daw2
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
        <title>Web registro</title>
    </head>
    <body>
    <center>
        <h1>Cambio contraseña</h1>
        <form action="changePassword.jsp" method="post">
            <table>
                <tr><td>Current Password</td><td><input type="password" name="current" ></td></tr>
                <tr><td>New Password</td><td><input type="password" name="new"></td></tr>
                <tr><td>Confirm Password</td><td><input type="password" name="confirm"></td></tr>
                <tr><td><input type="submit" value="Change Password"></td></tr>
            </table>
        </form>
        <center>
    </body>
</html>