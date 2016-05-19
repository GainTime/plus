<?php
    require_once('../models/company.php');
    require_once('../lib/controller/base.php');
    class Company_controller extends \Controller\Base {
        function __construct() {
            $this->location = '../views/contact';
            $this->model = self::get_model();
        }
    }

    $postActions = array('store', 'login');
    $getActions = array('delete');

    $call = new Company_controller();

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
