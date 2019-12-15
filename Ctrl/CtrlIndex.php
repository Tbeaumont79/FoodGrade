<?php
    class CtrlIndex extends Ctrl{
        private $_action;
        
        public function __construct() {
            $this->_action = '';
        }

        public function start() {
            $this->_view = new ViewIndex();
            $this->_view->buildPage();
        }
    }
?>