<?php
    require_once('../models/user.php');
    require_once('../lib/controller/base.php');

    class User_controller extends \Controller\Base {

        public $location = '../views/users';
        public $actions = ['login', 'store', 'delete'];
        public $fillneeded = ['name', 'email', 'level'];
    }

    User_controller::action();
