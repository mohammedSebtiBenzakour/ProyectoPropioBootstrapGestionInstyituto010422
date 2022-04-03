/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controladorEditarLibro;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.LinkedList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author daw2
 */
public class LibrosDao {

    Connection con;

    public LibrosDao(Connection con) {
        this.con = con;
    }

    public LibrosDao() {
    }

    public Connection getCon() {
        return con;
    }

    public void setCon(Connection con) {
        this.con = con;
    }

    public boolean añadirLibro(Libros libro) {
        boolean test = false;

        String sql = "insert into libros (nombreLibro, descripcionLibro , autorLibro, categoriaLibro) values ( ?,?,?,?)";

        try {
            PreparedStatement ps = this.con.prepareStatement(sql);
            ps.setString(1, libro.getNombreLibro());
            ps.setString(2, libro.getDescripcionLibro());
            ps.setString(3, libro.getAutorLibro());
            ps.setString(4, libro.getCategoriaLibro());

            ps.executeUpdate();

            test = true;

        } catch (SQLException e) {

            e.printStackTrace();
        }

        return test;
    }

    public List<Libros> getLibros() {

        List<Libros> libros = new LinkedList<>();

        String sql = "select * from libros";
        try {

            PreparedStatement ps = this.con.prepareStatement(sql);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                int id = rs.getInt("id");
                String nombreLibro = rs.getString("nombreLibro");
                String descripcionLibro = rs.getString("descripcionLibro");
                String autorLibro = rs.getString("autorLibro");
                String categoriaLibro = rs.getString("categoriaLibro");

                Libros libro = new Libros(id, nombreLibro, descripcionLibro, autorLibro, categoriaLibro);
                libros.add(libro);
            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return libros;
    }

    public boolean modificarLibro(Libros libro) {

        boolean test = false;
        String sql = "update libros set nombreLibro = ? , descripcionLibro = ? , autorLibro = ? , categoriaLibro = ? where id = ?";

        try {
            PreparedStatement ps = this.con.prepareStatement(sql);
            ps.setString(1, libro.getNombreLibro());
            ps.setString(2, libro.getDescripcionLibro());
            ps.setString(3, libro.getAutorLibro());
            ps.setString(4, libro.getCategoriaLibro());
            ps.setInt(5, libro.getId());

            ps.executeUpdate();
            test = true;
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return test;
    }

    public Libros getLibro(int id) {

        Libros libro = null;

        String sql = "select * from libros where id = ? ";

        try {
            PreparedStatement ps = this.con.prepareStatement(sql);

            ps.setInt(1, id);

            ResultSet rs = ps.executeQuery();

            while (rs.next()) {

                int idLibro = rs.getInt("id");
                String nombreLibro = rs.getString("nombreLibro");
                String descripcionLibro = rs.getString("descripcionLibro");
                String autorLibro = rs.getString("autorLibro");
                String categoriaLibro = rs.getString("categoriaLibro");

                libro = new Libros(id, nombreLibro, descripcionLibro, autorLibro, categoriaLibro);

            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return libro;

    }

    public void eliminarLibro(int id) {

        String sql = "delete from libros where id = ? ";

        try {
            PreparedStatement ps = this.con.prepareStatement(sql);
            ps.setInt(1, id);
            ps.execute();

        } catch (SQLException ex) {
            ex.printStackTrace();
        }

    }

    public List<Libros> getLibros(String buscar) {

        List<Libros> libros = new LinkedList<>();

       String sql = "select * from libros where nombreLibro like '%" + buscar + "%' or descripcionLibro like '%" + buscar + "%'"
               + " or autorLibro like '%"+buscar+"%'";
     //    String sql = "select * from libros where nombreLibro like '%" + "sebt" + "%'";
        try {

            PreparedStatement ps = this.con.prepareStatement(sql);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                int id = rs.getInt("id");
                String nombreLibro = rs.getString("nombreLibro");
                String descripcionLibro = rs.getString("descripcionLibro");
                String autorLibro = rs.getString("autorLibro");
                String categoriaLibro = rs.getString("categoriaLibro");

                Libros libro = new Libros(id, nombreLibro, descripcionLibro, autorLibro, categoriaLibro);
                libros.add(libro);
            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return libros;
    }

}
