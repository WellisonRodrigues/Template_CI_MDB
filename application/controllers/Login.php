<?php

/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 04/03/2018
 * Time: 21:40
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {

        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/login_form';
        $this->load->view('structure/container', $data);
    }

    public function sign_in()
    {

        if ($this->input->post('sign_in')) {
            echo 'ok';
        } else {
            echo 'ok';
        }
    }

    public function sign_up()
    {

    }

}