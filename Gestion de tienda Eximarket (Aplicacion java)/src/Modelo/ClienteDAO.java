/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Modelo;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

/**
 * Clase que maneja todas las operaciones relacionadas con los clientes
 *
 * @author Alejandroo
 */
public class ClienteDAO {

    private ArrayList<Cliente> listaClientes = new ArrayList<>();
    private Connection conn = ConexionBBDD.getConnection();

    /**
     * Inserta un nuevo cliente en la base de datos de la aplicacion
     *
     * @param datosCliente
     * @throws java.sql.SQLException
     */
    public void anadirCliente(Cliente datosCliente) throws SQLException {
        String sql = "INSERT into cliente values (" + "'" + datosCliente.getDni() + "'" + "," + "'" + datosCliente.getNombre() + "'" + "," + "'" + datosCliente.getApellidos() + "'" + "," + "'" + datosCliente.getTelefono() + "'" + "," + "'" + datosCliente.getDireccion() + "'" + "," + "'" + datosCliente.getEmail() + "'" + ")";
        Statement stm = conn.createStatement();
        int result = stm.executeUpdate(sql);
        stm.close();
    }

    /**
     * Elimina un cliente de la base de datos de la aplicacion
     *
     * @param datosCliente
     * @throws java.sql.SQLException
     */
    public void eliminarCliente(Cliente datosCliente) throws SQLException {
        Statement stm = conn.createStatement();
        String sql = "delete from cliente where DNI= '" + datosCliente.getDni() + "'";
        stm.executeUpdate(sql);
        stm.close();
    }

    /**
     * Modifica los datos de un cliente de la base de datos de la aplicacion
     *
     * @param datosCliente
     * @throws java.sql.SQLException
     */
    public void modificarCliente(Cliente datosCliente) throws SQLException {
        String sql = "update cliente set DNI = '" + datosCliente.getDni() + "',nombre='"
                + datosCliente.getNombre() + "',apellidos ='" + datosCliente.getApellidos()
                + "',telefono ='" + datosCliente.getTelefono() + "',direccion='" + datosCliente.getDireccion()
                + "',email ='" + datosCliente.getEmail() + "' where dni = '" + datosCliente.getDni()
                + "'";
        Statement stm = conn.createStatement();
        int result = stm.executeUpdate(sql);
        stm.close();
    }

    /**
     * Muestra todos los clientes almacenados en la base de datos de nuestra
     * aplicacion
     *
     * @throws java.sql.SQLException
     */
    public void cargaCliente() throws SQLException {
        listaClientes.removeAll(listaClientes);
        String sql = "select * from cliente";
        Statement stm = conn.createStatement();
        ResultSet rs = stm.executeQuery(sql);
        String[] datosCliente = new String[6];
        while (rs.next()) {
            datosCliente[0] = rs.getString("dni");
            datosCliente[1] = rs.getString("nombre");
            datosCliente[2] = rs.getString("apellidos");
            datosCliente[3] = rs.getString("telefono");
            datosCliente[4] = rs.getString("direccion");
            datosCliente[5] = rs.getString("email");
            Cliente c = new Cliente(datosCliente[0], datosCliente[1], datosCliente[2], Integer.parseInt(datosCliente[3]), datosCliente[4], datosCliente[5]);
            listaClientes.add(c);
        }
        stm.close();
    }

    /**
     * Devuelve la lista con todos los objetos almacenados en listaClientes
     *
     * @return arraylist listaClientes
     */
    public ArrayList<Cliente> getListaClientes() {
        return listaClientes;
    }
}
