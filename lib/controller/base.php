<?php
/**
 * Important: To use that class and your functions and properties correctly,
 * you will go need to name your Controller's class
 * with the same name of their correspondent Model concatenated to '_controller'.
 * Sample:
 * - Model: User
 * - Correspondent controller: User_controller
 */

    namespace Controller;

    class Base {

        /**
         * Stores the address to redirect user after action
         *
         * It'll be overloaded by each controller
         *
         * @var string
         */
        public $location;

        /**
         * Stores the Model class name
         *
         * It'll be overloaded to each controller;
         *
         * @var string
         */
        public $model;

        function __construct() {
            $this->location = $location;
            $this->model = $model;
        }

        /**
         * Gets model name, based on controller name
         *
         * It'll be used to do new class instances from Model
         *
         * @return string
         */
        public static function get_model() {
            return str_replace('_controller', '', get_called_class());
        }

        /**
         * Verifies if passed informations are sufficient to validate the query
         *
         * It'll be overloaded by each controller
         *
         * @return boolean
         */
        public static function is_valid() {
            return true;
        }

        /**
         * Controls what happens on system when an database line is inserted or updated
         *
         * @return void
         */
        public function store() {
            if (self::is_valid()) {
                $obj = new $this->model($_REQUEST);
                try {
                    (is_null($obj->id)) ? $obj->insert() : $obj->update();

                    $_SESSION['msg'] = 'success">Operação realizada com sucesso!';
                } catch(pdoexception $e) {
                    $_SESSION['msg'] = 'fail">Houve um erro. Por favor, confira as informações inseridas.';
                }
            } else {
                $_SESSION['msg'] = 'fail">Por favor, preencha os campos obrigatórios.';
            }
            header('Location:'.$this->location);
        }

        /**
         * Controls what happens on system when an database line is deleted
         *
         * @return void
         */
        public function delete() {
            if ($_REQUEST['delete']) {
                $_REQUEST['id'] = $_REQUEST['delete'];
                $obj = new $this->model($_REQUEST);
                try {
                    $_SESSION['msg'] = 'success">Operação realizada com sucesso!';
                    (!is_null($obj->id)) ? $obj->remove() : $_SESSION['msg'] = 'fail">Houve um erro. Por favor, tente novamente.';
                } catch(pdoexception $e) {
                    $_SESSION['msg'] = 'fail">Houve um erro. Por favor, tente novamente.';
                }
            }
            header('Location:'.$this->location);
        }

        /**
         * Controls what happens on system when an user login have success or failure
         *
         * @return void
         */
        public function login() {
            if (isset($_POST)) {
                $obj = new $this->model($_REQUEST);
                $got = $obj->login();
                if ($got) {
                    $_SESSION['id'] = $got->id;
                    $_SESSION['name'] = $got->name;
                    $_SESSION['on'] = true;
                    $got = null;
                    header('Location: ../views/home');
                } else {
                    header('Location: ../views/index');
                }
            }
        }
    }
