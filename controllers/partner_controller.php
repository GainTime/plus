<?php
    require_once('../models/partner.php');
    require_once('../lib/controller/base.php');

    class Partner_controller extends \Controller\Base {

        public $location = '../views/partners';
        public $fillneeded = ['name', 'description'];
    }

    Partner_controller::action();
