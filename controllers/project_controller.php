<?php
    require_once('../models/project.php');
    require_once('../lib/controller/base.php');

    class Project_controller extends \Controller\Base {

        public $location = '../views/projects';
        public $fillneeded = ['title', 'description'];
    }

    Project_controller::action();
