/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controllerGiangVanDat;

import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import modelGiangVanDat.SachModelGiangVanDat;
import serviceGiangVanDat.ConnectGiangVanDat;

/**
 *
 * @author Admin
 */
public class SachControllerGiangVanDat {
    private ConnectGiangVanDat connectJDBC = new ConnectGiangVanDat();
    public Connection conn;
    private Statement stm = null;
    
    public SachControllerGiangVanDat() {
        this.conn = connectJDBC.connect();
    }
    
    public List<SachModelGiangVanDat> getListSach(){
        List<SachModelGiangVanDat> listUser = new ArrayList<SachModelGiangVanDat>();
        String query = "SELECT * FROM sach;";
        
        try {
            //Tạo đối tượng Statement
            this.stm = this.conn.createStatement();
            //Thực thi truy vấn và trả về đối tượng ResultSet
            ResultSet rs = stm.executeQuery(query);
            
            while (rs.next()){
                int id = rs.getInt("id");
                String TenSach = rs.getString("TenSach");
                String TheLoai = rs.getString("TheLoai");
                Date NamXuatBan = rs.getDate("NamXuatBan");
                Date NgayNhap = rs.getDate("NgayNhap");
                int GiaTien = rs.getInt("GiaTien");
                
                listUser.add(new SachModelGiangVanDat(id,TenSach,TheLoai,NamXuatBan,NgayNhap,GiaTien));
            }
         
        } catch (SQLException e) {
            e.printStackTrace();
        }
        
        return listUser;
    }
    
    public List<SachModelGiangVanDat> searchSach(String name){
        List<SachModelGiangVanDat> listUser = new ArrayList<SachModelGiangVanDat>();
        String query = "SELECT * FROM `sach` WHERE TenSach LIKE '%"+name+"%';";
        
        try {
            //Tạo đối tượng Statement
            this.stm = this.conn.createStatement();
            //Thực thi truy vấn và trả về đối tượng ResultSet
            ResultSet rs = stm.executeQuery(query);
            
            while (rs.next()){
                int id = rs.getInt("id");
                String TenSach = rs.getString("TenSach");
                String TheLoai = rs.getString("TheLoai");
                Date NamXuatBan = rs.getDate("NamXuatBan");
                Date NgayNhap = rs.getDate("NgayNhap");
                int GiaTien = rs.getInt("GiaTien");
                
                listUser.add(new SachModelGiangVanDat(id,TenSach,TheLoai,NamXuatBan,NgayNhap,GiaTien));
            }
         
        } catch (SQLException e) {
            e.printStackTrace();
        }
        
        return listUser;
    }
    
    public boolean addSach(String TenSach,String TheLoai,String NamXuatBan,String NgayNhap,int GiaTien){
        boolean check=false;
        String query = "INSERT INTO `sach`(`TenSach`, `TheLoai`, `NamXuatBan`, `NgayNhap`, `GiaTien`) VALUES (N'"+TenSach+"',N'"+TheLoai+"','"+NamXuatBan+"','"+NgayNhap+"',"+GiaTien+");";
        PreparedStatement pstm = null;
        try {
            pstm = conn.prepareStatement(query);
            int row = pstm.executeUpdate();
            if(row != 0){
                check = true;
            }
        }
        catch (SQLException e) {
            e.printStackTrace();
        }

        System.out.println(query);
        return check;
    }
    
    public boolean editSach(int id,String TenSach,String TheLoai,String NamXuatBan,String NgayNhap,int GiaTien){
        boolean check=false;
        String query = "UPDATE sach SET TenSach=N'"+TenSach+"',TheLoai=N'"+TheLoai+"',NamXuatBan='"+NamXuatBan+"',NgayNhap='"+NgayNhap+"',GiaTien="+GiaTien+" WHERE id="+id+";";
        PreparedStatement pstm = null;
        try {
            pstm = conn.prepareStatement(query);
            int row = pstm.executeUpdate();
            if(row != 0){
                check = true;
            }
        }
        catch (SQLException e) {
            e.printStackTrace();
        }
//         System.out.println(query);
        return check;
    }
    
    public boolean deleteSach(int id){
        boolean check=false;
        String query = "DELETE FROM sach WHERE id = " + id +";";
        PreparedStatement pstm = null;
        try {
            pstm = conn.prepareStatement(query);
            int row = pstm.executeUpdate();
            if(row != 0){
                check = true;
            }
        }
        catch (SQLException e) {
            e.printStackTrace();
        }
        return check;
    }
}
