<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_model');
        $this->load->model('Alternatif_model');
    }
    
	public function index()
	{
        if($this->Login_model->logged_id())
        {
            redirect('Login/home');
        }else{
            $this->load->view('login');
        }
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $passwordx = md5($password);    
        $set = $this->Login_model->login($username, $passwordx);
        if($set)
        {
            $log = [
                'id_user' => $set->id_user,
                'username' => $set->username = $set->nama,
                'id_user_level' => $set->id_user_level,
                'status' => 'Logged'
            ];
            $this->session->set_userdata($log);
            redirect('Login/home');
        }else{
            $this->session->set_flashdata('message', 'Username atau Password Salah');
            redirect('login');
        }
    }

    public function home()
   
    {
        $data = [
            'page' => "Dashboard",
            'total_warga' => $this->Alternatif_model->total_warga(),
            'total_kriteria' => $this->Login_model->total_kriteria(),
            'total_sub_kriteria' => $this->Login_model->total_sub_kriteria(),
            'total_user' => $this->Login_model->total_user(),
        ];
        $this->load->view('admin/index', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function block()
    {
        $this->load->view('block');
    }
    

}
