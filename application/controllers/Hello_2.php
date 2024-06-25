<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello_2 extends CI_Controller {

    public function index()
    {
        $data['message'] = 'Hello, CodeIgniter!';
        $this->load->view('hello_message_2', $data);
    }
}
