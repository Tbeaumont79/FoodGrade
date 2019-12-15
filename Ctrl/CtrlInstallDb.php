<?php
    class CtrlInstallDb extends Ctrl {
        private $_action;

        public function __construct() {
            $this->_action = new ActionInstallDb();
        }

        public function start() {
            $this->_view = new ViewInstallDb();
            $this->_view->buildPage();
            $this->_action->installDb();
        }
    }
?>