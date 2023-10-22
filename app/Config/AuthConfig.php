<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Myth\Auth\Config\Auth;

class AuthConfig extends Auth {
    public $requireActivation = null;
    public $allowRegistration = false;

    public $validFields = ['username'];

    public $views = [
        'login'           => 'App\Views\login\index',
        'register'        => 'Myth\Auth\Views\register',
        'forgot'          => 'Myth\Auth\Views\forgot',
        'reset'           => 'Myth\Auth\Views\reset',
        'emailForgot'     => 'Myth\Auth\Views\emails\forgot',
        'emailActivation' => 'Myth\Auth\Views\emails\activation',
    ];
}
