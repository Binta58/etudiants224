<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	function getUsers(){
        $req = $this->db->get('utilisateur');
        if($req->num_rows()>0){
            return $req->result();
        }
    }
}
