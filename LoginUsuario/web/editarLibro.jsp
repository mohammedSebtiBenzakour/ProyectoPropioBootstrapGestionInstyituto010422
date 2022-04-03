<%-- 
    Document   : editarLibro
    Created on : 31-dic-2021, 10:44:09
    Author     : daw2
--%>
<%@page import="controladorEditarLibro.Libros"%>
<%@page import="controlador.Conexion"%>
<%@page import="java.sql.Connection"%>
<%@page import="controladorEditarLibro.LibrosDao"%>
<%
    Connection con = Conexion.conectarBD();
   int id = Integer.parseInt(request.getParameter("id"));
    LibrosDao librosDao = new LibrosDao(con);
    Libros libro = librosDao.getLibro(id);
    request.setAttribute("libro", libro);

 %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/nuevoEstilos.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="css/estiloLibros.css" rel="stylesheet" type="text/css"/>
        <title>Editar libros</title>
    </head>
    <body>
        <div class="container">
        <div  class="container-fluid">
            <nav class="navbar navbar-light">
                <a class="navbar-brand">Bibilioteca</a>
                <ul class="navbar-nav ml-auto mt-3 mx-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.jsp">Home</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="inner">
            <div class=" container">
                <div class="row">
                    <div class="col-12">
                        <h3>Editar libros</h3>
                        <form action="ServletEditarLibro" method="post">
                            <div class="form-group">
                                <label>ID libro</label>
                                <input class="form-control" name="id" value="${libro.id }" required>
                            </div>
                            <div class="form-group">
                                <label>Nombr elibro</label>
                                <input class="form-control" name="nombreLibro" value="${libro.nombreLibro }" required>
                            </div>
                            <div class="form-group">
                                <label>Descripcion del libro</label>
                                <input class="form-control" name="descripcionLibro" value="${libro.descripcionLibro}" required>
                            </div>
                            <div class="form-group">
                                <label>Autor del libro</label>
                                <input class="form-control" name="autorLibro" value="${libro.autorLibro}" required>
                            </div>
                            <div class="form-group" >
                                <label>Categoria del libro</label>
                                <select id="inputState" class="form-control" name="categoriaLibro" required>
                                    <option selected disabled>Choose Category</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Programming & Development">Programming & Development</option>
                                    <option value="Aston Martin">Aston Martin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar los datos</button>
                            <button  class="btn btn-primary"><a href="editarLibroIndex.jsp">Cancel</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</div>
    </body>
</html>

