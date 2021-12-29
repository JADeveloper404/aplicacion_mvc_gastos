<?php

class Login extends Controller {
    function __construct()
    {
        parent::__construct();
        error_log('Login::construct -> Inicio de Login');
    }

    function render() {
        error_log('Login::construct -> Inicio de Login');
        $this->view->render('login/index');
    }
}