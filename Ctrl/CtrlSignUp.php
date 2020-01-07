<?php
    class CtrlSignUp extends Ctrl {
        private $_action;
        private $_email;
        private $_password;
        public function __construct() {
            $this->_action = null;
        }

        public function start() {
            if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['confirmpass']))
            {
                $this->_password = $_POST['pass'];
                $this->_email = $_POST['email'];
                $this->_action = new ActionSignUp($this->_email, $this->_password);
            }
            $this->_view = new ViewSignUp();
            $this->_view->buildPage();
            
        }
    }
?>