<?php
    require_once('../models/partner.php');
    require_once('../lib/controller/base.php');

    class Partner_controller extends \Controller\Base {
        function __construct() {
            $this->location = '../views/partners';
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

    $call = new Partner_controller();

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
