<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        // Load the dashboard view - update the path to your actual view file
        $this->load->view('admin/dashboard'); 
    }
}
