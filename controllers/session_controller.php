<?php

    require_once('../lib/controller/base.php');

    class Session_controller extends \Controller\Base {

        public $location = '../views/index';
        public $actions = ['logout'];
    }

    Session_controller::action();
