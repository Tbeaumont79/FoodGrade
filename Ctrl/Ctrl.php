<?php
    class Ctrl {
        public static function routes() {
            switch ($_GET['page']) {
                case 'signUp':
                    $ctrl = new CtrlSignUp();
                break;
                case 'signIn':
                    $ctrl = new CtrlSignIn();
                break;
                case 'installDb':
                    $ctrl = new CtrlInstallDb();
                break;
                case 'index': 
                    $ctrl = new CtrlIndex();
                break;
                default:
                    $ctrl = new CtrlIndex();
            break;
            }
            return $ctrl;
        }

        protected $_view;
        public function __construct() {
            $this->_view = '';
        }

        public function getView() {
            return $this->_view;
        }

        public function start() {

        }
    }

?>