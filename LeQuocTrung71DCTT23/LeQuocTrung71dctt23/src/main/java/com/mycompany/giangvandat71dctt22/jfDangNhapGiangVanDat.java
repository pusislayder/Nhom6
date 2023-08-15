/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package com.mycompany.giangvandat71dctt22;

import controllerGiangVanDat.UserControllerGiangVanDat;
import java.awt.Color;
import java.util.List;
import javax.swing.JFrame;
import modelGiangVanDat.UserModelGiangVanDat;
import serviceGiangVanDat.GlobalGiangVanDat;

/**
 *
 * @author Admin
 */
public class jfDangNhapGiangVanDat extends javax.swing.JFrame {

    private UserControllerGiangVanDat userController;
    private JFrame frame; 
    /**
     * Creates new form jfDangNhapGiangVanDat
     */
    public jfDangNhapGiangVanDat() {
        initComponents();
        userController = new UserControllerGiangVanDat();
    }

    public void close(){
        this.dispose();
    }
    
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        txtUserName = new javax.swing.JTextField();
        txtPassword = new javax.swing.JPasswordField();
        txtThongBao = new javax.swing.JLabel();
        btnDangNhap = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel2.setFont(new java.awt.Font("Segoe UI", 1, 26)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(0, 0, 102));
        jLabel2.setText("ĐĂNG NHẬP");
        getContentPane().add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(190, 30, 210, 40));

        jLabel3.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel3.setText("Tên đăng nhập :");
        getContentPane().add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 120, -1, -1));

        jLabel4.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel4.setText("Mật khẩu :");
        getContentPane().add(jLabel4, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 180, -1, -1));

        txtUserName.setText("Nhập tên đăng nhập...");
        txtUserName.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                txtUserNameFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                txtUserNameFocusLost(evt);
            }
        });
        getContentPane().add(txtUserName, new org.netbeans.lib.awtextra.AbsoluteConstraints(240, 120, 220, 30));
        getContentPane().add(txtPassword, new org.netbeans.lib.awtextra.AbsoluteConstraints(240, 180, 220, 30));

        txtThongBao.setForeground(new java.awt.Color(204, 51, 0));
        txtThongBao.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        getContentPane().add(txtThongBao, new org.netbeans.lib.awtextra.AbsoluteConstraints(80, 80, 400, 25));

        btnDangNhap.setText("Đăng Nhập");
        btnDangNhap.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnDangNhap.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnDangNhapActionPerformed(evt);
            }
        });
        getContentPane().add(btnDangNhap, new org.netbeans.lib.awtextra.AbsoluteConstraints(210, 270, 140, 40));

        jLabel1.setPreferredSize(new java.awt.Dimension(550, 400));
        getContentPane().add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, -10, -1, -1));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void txtUserNameFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_txtUserNameFocusGained
        // TODO add your handling code here:
        if(txtUserName.getText().equals("Nhập tên đăng nhập...")){
            txtUserName.setText("");
            txtUserName.setForeground(new Color(0,0,0));
        }
    }//GEN-LAST:event_txtUserNameFocusGained

    private void txtUserNameFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_txtUserNameFocusLost
        // TODO add your handling code here:
        if(txtUserName.getText().equals("")){
            txtUserName.setText("Nhập tên đăng nhập...");
            txtUserName.setForeground(new Color(153,153,153));
        }
    }//GEN-LAST:event_txtUserNameFocusLost

    private void btnDangNhapActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnDangNhapActionPerformed
        // TODO add your handling code here:
        txtThongBao.setText("");
        if(txtUserName.getText().equals("Nhập tên đăng nhập...") ||txtUserName.getText().equals("")
                || String.valueOf(txtPassword.getText()).equals("")){
            txtThongBao.setText("Vui lòng nhập tài khoản, mật khẩu!");
        }
        else{
            List<UserModelGiangVanDat> user = userController.getUser(txtUserName.getText(), String.valueOf(txtPassword.getText()));
            if(user.size()>0){
                close();
                GlobalGiangVanDat global = new GlobalGiangVanDat();
                global.setUserNameMainString(txtUserName.getText());
                frame = new jfQuanLyGiangVanDat();
                frame.setLocationRelativeTo(null);
                frame.setResizable(false);
                frame.setVisible(true);
            }else{
                txtThongBao.setText("tên đăng nhập hoặc mật khẩu sai, vui lòng kiểm tra lại!");
            }
            
        }
        
        
    }//GEN-LAST:event_btnDangNhapActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(jfDangNhapGiangVanDat.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(jfDangNhapGiangVanDat.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(jfDangNhapGiangVanDat.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(jfDangNhapGiangVanDat.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new jfDangNhapGiangVanDat().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnDangNhap;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JPasswordField txtPassword;
    private javax.swing.JLabel txtThongBao;
    private javax.swing.JTextField txtUserName;
    // End of variables declaration//GEN-END:variables
}
