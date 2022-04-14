/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controlador;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

/**
 *
 * @author daw2
 */
public class UsarBaseDatos {

    Connection con;

    public UsarBaseDatos(Connection con) {
        this.con = con;
    }

    //for register user 
    public boolean registrarUsuario(Usuario u) {
        boolean set = false;
        try {
            //Insert register data to database
            String sql = "insert into usuarios (nombre,email,password) values(?,?,?)";

            PreparedStatement pt = this.con.prepareStatement(sql);
            pt.setString(1, u.getNombre());
            pt.setString(2, u.getEmail());
            pt.setString(3, u.getPassword());

            pt.executeUpdate();
            set = true;
        } catch (Exception e) {
            e.printStackTrace();
        }
        return set;
    }

    public Usuario login(String email, String password) {
        Usuario u = null;

        String sql = "select * from usuarios where email = ? and password = ?";

        try {
            PreparedStatement ps = this.con.prepareStatement(sql);
            ps.setString(1, email);
            ps.setString(2, password);

            ResultSet rs = ps.executeQuery();
            
            //si usuario existe
            if (rs.next()) {
                u = new Usuario();
                u.setId(rs.getInt("id"));
                u.setNombre(rs.getString("nombre"));
                u.setEmail(rs.getString("email"));
                u.setPassword(rs.getString("password"));
            }

        } catch (Exception e) {
            e.printStackTrace();
        }

        return u;
    }

}