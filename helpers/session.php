<?php
    require_once('../controllers/session_controller.php');

    class Session extends Session_controller{

        /**
         * Verify if an valid login is runing
         *
         * @return void
         */
        public static function is_onLine() {
            if (!isset($_SESSION['on'])) {
                header('Location: ../controllers/session_controller?logout');
            }
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

        /**
         * Verify location to active link on menu
         *
         * @param  string  $page
         *
         * @return boolean
         */
        public static function is_active($page) {
            if (array_pop(explode('/', $_SERVER['REQUEST_URI'])) == $page) {
                echo ' class="active"';
            }
        }
    }

    session_start();
    Session::is_onLine();
