/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelGiangVanDat;

/**
 *
 * @author Admin
 */
public class UserModelGiangVanDat {
    private int IDUser;
    private String nameUser;
    private String password;
    private String email;
    private String address;
    private String phone;

    public UserModelGiangVanDat(int IDUser, String nameUser, String password, String email, String address, String phone) {
        this.IDUser = IDUser;
        this.nameUser = nameUser;
        this.password = password;
        this.email = email;
        this.address = address;
        this.phone = phone;
    }

    public int getIDUser() {
        return IDUser;
    }

    public String getNameUser() {
        return nameUser;
    }

    public String getPassword() {
        return password;
    }

    public String getEmail() {
        return email;
    }

    public String getAddress() {
        return address;
    }

    public String getPhone() {
        return phone;
    }

    public void setIDUser(int IDUser) {
        this.IDUser = IDUser;
    }

    public void setNameUser(String nameUser) {
        this.nameUser = nameUser;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }
    
}
