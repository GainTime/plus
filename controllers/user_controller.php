<?php
    require_once('../models/user.php');
    require_once('../lib/controller/base.php');

    class User_controller extends \Controller\Base {

        function __construct() {
            $this->location = '../views/users';
            $this->model = self::get_model();
        }

        public static function is_valid() {
            if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['level'] != "") {
                return true;
            }
            return false;
        }
    }

    $postActions = array('store', 'login');
    $getActions = array('delete');

    $call = new User_controller();

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
