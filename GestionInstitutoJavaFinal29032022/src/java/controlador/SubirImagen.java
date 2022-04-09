/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controlador;

import com.github.sarxos.webcam.Webcam;
import java.awt.Dimension;
import java.awt.Image;
import java.awt.image.RenderedImage;
import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.imageio.ImageIO;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import javax.swing.ImageIcon;

/**
 *
 * @author daw2
 */
public class SubirImagen extends HttpServlet {

    Webcam webcam;
    boolean isRunning = false;

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
        response.setContentType("text/html;charset=UTF-8");

        response.setContentType("text/html;charset=latin1");
        request.setCharacterEncoding("latin1");
        HttpSession sesion = request.getSession();
        String error = null;

        webcam = Webcam.getWebcams().get(1);
        webcam.setViewSize(new Dimension(640, 480));
        webcam.open();

        String timeStamp = new SimpleDateFormat("yyyy.MM.dd.HH.mm.ss").format(new Date());
        Image image = webcam.getImage();
//        imagen.setIcon(new ImageIcon(image));
        String fich = "moham" + timeStamp + ".jpg";
        Path currentRelativePath = Paths.get("");
        String s = currentRelativePath.toAbsolutePath().toString();
        System.out.println("Current relative path is: " + s);
        File fichero = new File(fich);
        System.out.println("la imagen es :" + fichero.getAbsoluteFile());
        System.out.println("la imagen es :" + fich);
        System.out.println("el s :" + s);

        //  File fichero = new File("moham" + timeStamp + ".jpg");
        try {

            ImageIO.write((RenderedImage) image, "JPG", fichero);

        } catch (IOException ex) {

        }
        if (!isRunning) {
            isRunning = true;
            new VideoFeedTaker().start();
        } else {
            isRunning = false;
        }

//        try (PrintWriter out = response.getWriter()) {
//            /* TODO output your page here. You may use following sample code. */
//            out.println("<!DOCTYPE html>");
//            out.println("<html>");
//            out.println("<head>");
//            out.println("<title>Servlet SubirImagen</title>");
//            out.println("</head>");
//            out.println("<body>");
//            out.println("<h1>Servlet SubirImagen at " + request.getContextPath() + "</h1>");
//            out.println("<img src=C:\\Users\\daw2\\Desktop\\sss" + fichero + " >");
//            out.println("</body>");
//            out.println("</html>");
//        }
        webcam.close();

        request.setAttribute("fichero", fichero.getAbsoluteFile());

        getServletContext().getRequestDispatcher("/admin/insertarImagenes.jsp").forward(request, response);

    }

    class VideoFeedTaker extends Thread {

        @Override
        public void run() {
            while (isRunning) {
                Image image = webcam.getImage();

                try {
                    Thread.sleep(50);
                } catch (InterruptedException ex) {

                }
            }
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
