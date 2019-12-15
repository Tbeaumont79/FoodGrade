<?php
    class CtrlSignIn extends Ctrl{
        
        public function __construct() {

        }

        public function start() {
            $this->_view = new ViewSignIn();
            $this->_view->buildPage();
        }
    }
?>