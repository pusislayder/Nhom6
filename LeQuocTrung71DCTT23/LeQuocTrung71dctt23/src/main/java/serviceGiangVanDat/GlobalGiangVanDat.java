/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package serviceGiangVanDat;

import javax.swing.JFrame;

/**
 *
 * @author Admin
 */
public class GlobalGiangVanDat {
    public static String userNameMainString="";
    public static JFrame frameMain = null; 

    public GlobalGiangVanDat() {
    }

    public static String getUserNameMainString() {
        return userNameMainString;
    }

    public static void setUserNameMainString(String userNameMainString) {
        GlobalGiangVanDat.userNameMainString = userNameMainString;
    }

    public static JFrame getFrameMain() {
        return frameMain;
    }

    public static void setFrameMain(JFrame frameMain) {
        GlobalGiangVanDat.frameMain = frameMain;
    }
    
}
