/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package serviceGiangVanDat;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author Admin
 */
public class ConnectGiangVanDat {
    private String hostName = "localhost";
    private String dbName = "qlsachgiangvandat";
    private String username = "root";
    private String password = "";
    private String connectionURL = "jdbc:mysql://"+hostName+"/"+dbName;
    
    public Connection connect(){
    //Tạo đối tượng Connection
        Connection conn = null;
        try {
            conn = DriverManager.getConnection(connectionURL,username, password);
            System.out.println("Kết nối thành công");
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return conn;
    }
}
