/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controllerGiangVanDat;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import modelGiangVanDat.UserModelGiangVanDat;
import serviceGiangVanDat.ConnectGiangVanDat;

/**
 *
 * @author Admin
 */
public class UserControllerGiangVanDat {
    private ConnectGiangVanDat connectJDBC = new ConnectGiangVanDat();
    public Connection conn;
    private Statement stm = null;
    
    public UserControllerGiangVanDat() {
        this.conn = connectJDBC.connect();
    }
    
    public List<UserModelGiangVanDat> getUser(String NameUser, String Password){
        List<UserModelGiangVanDat> listUser = new ArrayList<UserModelGiangVanDat>();
        String query = "SELECT * FROM user WHERE nameUser = BINARY'"+NameUser+"' AND password = '"+ Password +"';";
        
        try {
            //Tạo đối tượng Statement
            this.stm = this.conn.createStatement();
            //Thực thi truy vấn và trả về đối tượng ResultSet
            ResultSet rs = stm.executeQuery(query);
            
            while (rs.next()){
                int IDUser = rs.getInt("IDUser");
                String nameUser = rs.getString("nameUser");
                String password = rs.getString("password");
                String email = rs.getString("email");
                String address = rs.getString("address");
                String phone = rs.getString("phone");
                
                listUser.add(new UserModelGiangVanDat(IDUser,nameUser,password,email,address,phone));
            }
         
        } catch (SQLException e) {
            e.printStackTrace();
        }
        
        return listUser;
    }
}
