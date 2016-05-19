<?php
    class Session {

        /**
         * Verify if an valid login is runing
         *
         * @return void
         */
        public static function onLine() {
            isset($_SESSION['on']) ? true : static::logout();
        }

        /**
         * Log out the current logged in user
         *
         * @return void
         */
        public static function logout() {
        	session_destroy();
        	header('Location: ../views/index');
        }

        /**
         * Prints the current session message
         * 
         * @return void
         */
        public static function msg() {
            (isset($_SESSION['msg'])) ? $msg='<div class="msg '.$_SESSION['msg'].'</div>' : $msg = $_SESSION['msg'] = null;
            unset($_SESSION['msg']);
            echo $msg;
        }
    }

    session_start();

    if(isset($_POST['action']) && $_POST['action'] != "login" || !isset($_POST['action'])) Session::onLine();

    $getActions = array('logout');

    if(key($_GET) !== null && in_array(key($_GET), $getActions)) {
        $command = key($_GET);
        unset($_GET);
        Session::$command();
    }
