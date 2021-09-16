<?php
/**
 * Created by PhpStorm.
 * User: chusa
 * Date: 4/30/2019
 * Time: 11:08 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["title"] = "Login";
        $data["subtitle"] = "Continue to enjoy awesome experience!";

        if($this->session->userdata("username")){
            redirect('dashboard');
        } else {
            $this->load->view('login');
         }
    }

    public function do_login(){
        if(isset($_POST)  && count($_POST) > 0){

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            $params = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );
            if($this->form_validation->run()){
                $this->load->model('Admin_model');
                $data =  $this->Admin_model->login($params);
                if($data){
                    $this->session->set_userdata($data);
                    $_SESSION['search_name'] = "";
                    $_SESSION['search_region_id'] = "";
                    $_SESSION['search_street'] = "";
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Email / Password combination does not exist');
                    redirect('login', 'refresh');
                }
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    function logout(){
       $this->session->sess_destroy();
        redirect('login');
    }
}