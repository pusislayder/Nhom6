/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package modelGiangVanDat;

import java.sql.Date;

/**
 *
 * @author Admin
 */
public class SachModelGiangVanDat {
    private int id;
    private String TenSach;
    private String TheLoai;
    private Date NamXuatBan;
    private Date NgayNhap;
    private int GiaTien;

    public SachModelGiangVanDat(int id, String TenSach, String TheLoai, Date NamXuatBan, Date NgayNhap, int GiaTien) {
        this.id = id;
        this.TenSach = TenSach;
        this.TheLoai = TheLoai;
        this.NamXuatBan = NamXuatBan;
        this.NgayNhap = NgayNhap;
        this.GiaTien = GiaTien;
    }

    public int getId() {
        return id;
    }

    public String getTenSach() {
        return TenSach;
    }

    public String getTheLoai() {
        return TheLoai;
    }

    public Date getNamXuatBan() {
        return NamXuatBan;
    }

    public Date getNgayNhap() {
        return NgayNhap;
    }

    public int getGiaTien() {
        return GiaTien;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setTenSach(String TenSach) {
        this.TenSach = TenSach;
    }

    public void setTheLoai(String TheLoai) {
        this.TheLoai = TheLoai;
    }

    public void setNamXuatBan(Date NamXuatBan) {
        this.NamXuatBan = NamXuatBan;
    }

    public void setNgayNhap(Date NgayNhap) {
        this.NgayNhap = NgayNhap;
    }

    public void setGiaTien(int GiaTien) {
        this.GiaTien = GiaTien;
    }
    
}
