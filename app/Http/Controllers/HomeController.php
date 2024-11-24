<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "Halaman Home",
            'isi' => 'auth',
        ];
        $this->load->view('layout/all', $data);
    }
}