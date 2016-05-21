<?php
    require_once('../models/service.php');
    require_once('../lib/controller/base.php');

    class Service_controller extends \Controller\Base {

        public $location = '../views/services';
        public $fillneeded = ['title', 'description'];
    }

    Service_controller::action();
