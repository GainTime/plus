<?php
    require_once('../models/company.php');
    require_once('../lib/controller/base.php');

    class Company_controller extends \Controller\Base {

        public $location = '../views/company';
        public $actions = ['store'];
    }

    Company_controller::action();
