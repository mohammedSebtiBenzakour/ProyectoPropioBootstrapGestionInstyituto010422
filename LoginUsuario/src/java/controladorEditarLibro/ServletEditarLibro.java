/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controladorEditarLibro;

import controlador.Conexion;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author daw2
 */
@WebServlet(name = "ServletEditarLibro", urlPatterns = {"/ServletEditarLibro"})
public class ServletEditarLibro extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            response.setContentType("text/html;charset=UTF-8");
            request.setCharacterEncoding("UTF-8");
            
            String error = "";
            Connection con = Conexion.conectarBD();
            int id = Integer.parseInt(request.getParameter("id"));
            String nombreLibro = request.getParameter("nombreLibro");
            String descripcionLibro = request.getParameter("descripcionLibro");
            String autorLibro = request.getParameter("autorLibro");
            String categoriaLibro = request.getParameter("categoriaLibro");

            Libros libro = new Libros();
            libro.setId(id);
            libro.setAutorLibro(autorLibro);
            libro.setDescripcionLibro(descripcionLibro);
            libro.setNombreLibro(nombreLibro);
            libro.setCategoriaLibro(categoriaLibro);

            LibrosDao librosDao = new LibrosDao(con);
            boolean test = librosDao.modificarLibro(libro);

            if (test) {
                 response.sendRedirect("editarLibroIndex.jsp");
                //  error = "todo correcto ";
            } else {
                error = "Datos erroneos ";
            }

            try (PrintWriter out = response.getWriter()) {
                /* TODO output your page here. You may use following sample code. */
                out.println("<!DOCTYPE html>");
                out.println("<html>");
                out.println("<head>");
                out.println("<title>Servlet ServletEditarLibro</title>");
                out.println("</head>");
                out.println("<body>");
                out.println("<h1>Servlet ServletEditarLibro at " + request.getContextPath() + "</h1>");
                out.println("<h1> " + error + "</h1>");
                out.println("</body>");
                out.println("</html>");
            }
        } catch (SQLException ex) {
            Logger.getLogger(ServletEditarLibro.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
