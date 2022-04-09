<%-- 
    Document   : insertarEvaluacion
    Created on : 02-abr-2022, 17:13:58
    Author     : daw2
--%>

<%@page import="javax.persistence.Query"%>
<%@page import="javax.persistence.EntityManager"%>
<%@page import="java.util.List"%>
<%@page import="dao.Registrar_alumnosJpaController"%>
<%@page import="javax.persistence.Persistence"%>
<%@page import="javax.persistence.EntityManagerFactory"%>
<%@page import="entidades.Registrar_alumnos"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="latin1"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<jsp:useBean id="now" class="java.util.Date"/>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=latin1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Short+Stack&display=swap" rel="stylesheet">
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Gestion Instituto</title>
        <script>

            function mostrarMensaje() {
            //    alert("${param.mensaje}");
            Swal.fire({
                title: '${param.mensaje}',
                type: 'success'
            })
            }

        </script>
    </head>
    <body onload='${empty param.mensaje?"":"mostrarMensaje()"}'>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="ps-5">
                    <a class="navbar-brand" href="../login.jsp">Menu General</a>
                </div>

                <div class="ps-5">
                    <jsp:include page="encabezadoAdmin.jsp" >
                        <jsp:param name="título" value="Pagina Principal"/>
                    </jsp:include>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <a href="../CerrarSesion" class="pe-5">Cerrar Sesión</a>
                    <fmt:timeZone  value="Europe/Madrid" >
                        <fmt:formatDate type="both" dateStyle="full"  value="${now}"/>
                    </fmt:timeZone>
                </div>
            </div>
        </nav>
        <section class="container">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3>Insertar una Evaluacion</h3>
                                <p>Completar todos los campos.</p>
                                <form class="requires-validation" novalidate action="InsertarEvaluacion" method="post">
                                    <div class="col-md-12">
                                        <select class="form-select mt-3" required name="dni_alumno">
                                            <option selected disabled value="">Seleccionar Profesor</option>
                                            <%
                                                EntityManagerFactory emf = Persistence.createEntityManagerFactory("GestionInstitutoJavaFinalPU");
                                                HttpSession sesion = request.getSession();
                                                Registrar_alumnosJpaController rajc = new Registrar_alumnosJpaController(emf);
                                                List<Registrar_alumnos> listaAlumnos = null;

                                                EntityManager em = emf.createEntityManager();

                                                Query consultaA = em.createQuery("Select a From Registrar_alumnos a");

                                                listaAlumnos = consultaA.getResultList();

                                                for (Registrar_alumnos al : listaAlumnos) {
                                            %>
                                            <option value="<%=al.getDni_alumno()%>"><%=al.getNombre_alumno()%> <%=al.getPrimer_apellido_alumno()%> <%=al.getSegundo_apellido_alumno()%></option>
                                            <%
                                                }
                                            %>
                                        </select>
                                        <div class="valid-feedback">You selected a position!</div>
                                        <div class="invalid-feedback">Please select a position!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="nota" placeholder="Nota Alumno" value="${nota}" required>
                                        <div class="valid-feedback">Nota Alumno field is valid!</div>
                                        <div class="invalid-feedback">Nota Alumno field cannot be blank!</div>
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="observacion" value="${observacion}" placeholder="Observación" required>
                                        <div class="valid-feedback">Observación field is valid!</div>
                                        <div class="invalid-feedback">Observación field cannot be blank!</div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label">I confirm that all data are correct</label>
                                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                    </div>


                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary" name="insertarEvaluacion">Insertar Materia</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <footer class="container mb-5 d-flex justify-content-center align-items-center btn btn-warning shadow rounded text-uppercase botonInicio">
            <h2><a href="gestionEvaluaciones.jsp" class="botonInicio">Volver</a></h2>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="" type="text/javascript"></script>
        <script src="../js/login.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
</html>
