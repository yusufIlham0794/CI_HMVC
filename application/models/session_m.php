<?php

/**
* Session model on the system
*/
class Session_m extends CI_Model
{
    var $tabel='user';

    public function __construct(){
        parent::__construct();
    }

    //login function to access the database
    public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $query = $this->db->get($this->tabel);

        if(!$query) return false;

        foreach($query->result() as row){
            $data = array(
                'username'  => $row->username,
                'email'     => $row->email
            );
        };

        return $data;
    }

}

?>
