<?php
    class ActionSignIn {
        private $_linkToDb;
        private $_record;
        private $_sqlStatementSignIn;

        public function __construct($username, $password) {
            $this->_linkToDb = new ConnectToDb();
            $this->_linkToDb->connectToDb();
            $this->_record = new DataUserRecord($username, $password, null);
        }

        public function actionSignIn() {

        }
    }
?>