<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index()
	{
        $this->load->model('Login_model');
        if($this->Login_model->logged_id())
        {
            redirect('Login');
        }else{
            redirect('Beranda/home');
        }

	}
    
    public function home()
    {
        $this->load->model('Login_model');
        if($this->Login_model->logged_id())
        {
            redirect('Login');
        }else{
            $data['page'] = "Beranda";
		$this->load->view('beranda/index',$data);
        }
    }

    public function profile()
    {
        $this->load->model('Login_model');
        if($this->Login_model->logged_id())
        {
            redirect('Login');
        }else{
            $data['page'] = "Profile";
            $this->load->view('profile_desa/index', $data);
        }
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function spk()
    {
        $this->load->model('Login_model');
        if($this->Login_model->logged_id())
        {
            redirect('Login');
        }else{
            $data['page'] = "Beranda";
            $this->load->view('beranda/spk',$data);
        }
     
        
    }

    
}
