<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {
    
    public function _remap($method, $params = array()) {

       switch($method) {
           case "": case "index":
               $data['uname'] = $this->session->username;

                $this->load->view('parker/v_index',$data);
                break;
           case "daftar":
                $this->load->view('parker/v_daftar');
                break;
           case "login":
               $this->load->view('parker/v_masuk');
                break;
           case "func_daftar":
               $result = $this->M_user->register($this->input);
               if($result) {
                    $this->session->set_flashdata("success", "Pengguna berhasil dibuat.");
                   redirect("masuk");
               }
               else redirect("daftar");
               break;
           case "func_login":
               echo "aa";
               $result = $this->M_user->ulogin($this->input);
               if($result) {
                    $this->session->set_flashdata("success", "Pengguna berhasil dibuat.");
                   redirect("");
               }
               else redirect("masuk");
                break;
           case "func_logout":
               $this->M_user->ulogout();
               redirect("");
               break;


        }
    }   
}
