/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.giangvandat71dctt22;

import java.io.IOException;
import javax.swing.JFrame;

/**
 *
 * @author Admin
 */
public class GiangVanDat71DCTT22 {
    private JFrame frame;

    public GiangVanDat71DCTT22() {
        showMain();
    }
    
    public void showMain(){
        frame = new jfDangNhapGiangVanDat();
        frame.setLocationRelativeTo(null);
        frame.setResizable(false);
        frame.setVisible(true);
    }
    
    public static void main(String[] args) {
        new GiangVanDat71DCTT22();
    }
}
