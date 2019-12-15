<?php
    class CtrlSignUp extends Ctrl {
       
        public function __construct() {

        }

        public function start() {
            $this->_view = new ViewSignUp();
            $this->_view->buildPage();
        }
    }
?>