<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {
    
    public function _remap($method, $params = array()) {
       switch($method) {
           case "": case "index":
                $this->load->view('parker/v_index');
                break;
           case "daftar":
                $this->load->view('parker/v_daftar');
                break;
           case "login":
               $this->load->view('parker/v_masuk');
                break;
           case "func_daftar":
               $result = $this->M_user->register($this->input);
               if($result) redirect("index");
               else redirect("daftar");
               break;
           case "func_login":

        }
    }   
}
