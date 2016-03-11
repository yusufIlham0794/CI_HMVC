<?php
 
class login extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Session_m');
    }

    public function index(){
        $this->loginform();
    }

    public function loginform(){
        $d['judul']="Area Login Administrator";
        $d['judulform']="Login Administrator";
        $this->load->view('login/formlogin',$d);
    }

    public function proseslogin(){

        //input form login
        $username =$this->input->post('username');
        $password =md5($this->input->post('password')); //enkrip dengan md5

        //validasi form
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

        //jalankan validasi form
        if($this->form_validation->run()===FALSE){
            $this->session->set_flashdata('pesan1','username dan password masih kosong!');
            redirect(site_url().'/login/loginform');
        }else{
            $this->load->model('session_m');
            $login_params = $this->session_m->ceklogin($username,$password);

            if($login_params && isArray($login_params)){
                $this->session->set_userdata($login_params);
                //direct kehalaman dashboard
                redirect(site_url().'/dashboard');
            }else{
                //login gagal direct ke form login dan tampilkan pesan eror
                $this->session->set_flashdata('pesan2','Oops!!username dan password anda salah !');
                redirect(site_url().'/login/loginform');
            }

        }
    }

    public function logout()
    {
        $logout_params = array( 'username', 'logged_in', 'email' );
        $this->session->unset_userdata($logout_params);
        $this->session->sess_destroy();
        redirect(site_url().'/login');
    }
}

?>
