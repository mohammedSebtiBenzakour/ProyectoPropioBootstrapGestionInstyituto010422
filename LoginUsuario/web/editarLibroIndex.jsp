<%-- 
    Document   : editarLibroIndex
    Created on : 31-dic-2021, 10:48:42
    Author     : daw2
--%>
<%@page import="java.sql.Connection"%>
<%@page import="java.util.List"%>
<%@page import="controladorEditarLibro.Libros"%>
<%@page import="controladorEditarLibro.ConexionDao"%>
<%@page import="controladorEditarLibro.LibrosDao"%>
<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c"%>
<%
    Connection con = ConexionDao.conectarBD();
    LibrosDao librosDao = new LibrosDao(con);
    List<Libros> libros = librosDao.getLibros();
    request.setAttribute("libros", libros);
%>


<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/nuevoEstilos.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <title>Bibilioteca</title>

        <style>
            .inner{
                margin: 15px 0;
            }
        </style>
    </head>
    <body>
        <div  class="container-fluid">
            <nav class="navbar navbar-light">
                <a class="navbar-brand">Bibilioteca</a>
                <form class="form-inline" action="ServletLibrosBuscar" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="buscar" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button"><a href="cerrarSession.jsp">Cerrar session</a></button>
                </form>
            </nav>
        </div>
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Introducir libros</h3>
                        <form action="ServletAniadirLibro" method="post">
                            <div class="form-group">
                                <label>Nombre libro</label>
                                <input class="form-control" name="nombreLibro" placeholder="Nombre libro" required>
                            </div>
                            <div class="form-group">
                                <label>Descripcion libro</label>
                                <input class="form-control" name="descripcionLibro" placeholder="Descripcion libro" required>
                            </div>
                            <div class="form-group">
                                <label>Autor libro</label>
                                <input class="form-control" name="autorLibro" placeholder="Autor libro" required>
                            </div>
                            <div class="form-group" >
                                <label>Categoria libro</label>
                                <select id="inputState" class="form-control" name="categoriaLibro" required>
                                    <option selected disabled>Seleccionar Categoria</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Programming & Development">Programming & Development</option>
                                    <option value="Coches">Coches</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <a href="welcomeBienvenido.jsp" class="btn btn-outline-success">Volver</a>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <h3> Listado de los libros en la biblioteca</h3>
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Nombre libro</th>
                                    <th scope="col">Descripcion libro</th>
                                    <th scope="col">Autor libro</th>
                                    <th scope="col">Categoria libro</th>
                                    <th scope="col">Accion(Eliminar/Modificar)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <c:forEach var="tempBook" items="${libros}">
                                    <tr>
                                        <td>${tempBook.nombreLibro }</td>
                                        <td>${tempBook.descripcionLibro }</td>
                                        <td>${tempBook.autorLibro }</td>
                                        <td>${tempBook.categoriaLibro}</td>
                                        <td><a class="btn btn-success" href="editarLibro.jsp?id=${tempBook.id }">Modificar</a> 
                                            <a class="btn btn-danger" href="ServletEliminarLibro?id=${tempBook.id}">Eliminar</a></td>
                                    </tr>
                                </c:forEach>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
