<?php

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        echo "hoppala";

    }

    public function login(){

        $this->load->view("homepage_v");
    }

    public function login_form(){

        $this->load->view("login_v");
    }







}
