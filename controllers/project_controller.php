<?php
    require_once('../models/project.php');
    require_once('../lib/controller/base.php');

    class Project_controller extends \Controller\Base {
        function __construct() {
            $this->location = '../views/projects';
            $this->model = self::get_model();
        }

        public static function is_valid() {
            if ($_POST['name'] != "" && $_POST['description'] != "") {
                return true;
            }
            return false;
        }
    }

    $postActions = array('store');
    $getActions = array('delete');

    $call = new Project_controller();

    if(isset($_POST['action']) && in_array($_POST['action'], $postActions)) {
        $call->$_POST['action']();
    }
    elseif((key($_GET))!==null && in_array(key($_GET), $getActions)) {
        $command = key($_GET);
        $call->$command();
    }
    else {
        header('Location: ../');
    }
