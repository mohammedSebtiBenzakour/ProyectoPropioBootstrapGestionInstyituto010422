<%-- 
    Document   : leerEmail
    Created on : 23-abr-2022, 23:04:06
    Author     : daw2
--%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <form action="LeerElEmail" method="POST" enctype="multipart/form-data">
            <input type="submit" value="enviar">
        </form>
        
        <c:forEach var="m" items="${email}">
            <h1><c:out value='${m.getFrom()[0].toString()}'/></h1>
        </c:forEach>
    </body>
</html>
