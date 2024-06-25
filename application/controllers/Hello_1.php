<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_1 extends CI_Controller {

    public function index()
    {
        $this->load->view('hello_message');
    }
}
