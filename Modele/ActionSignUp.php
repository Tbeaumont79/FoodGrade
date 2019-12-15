<?php
    class ActionSignUp {
        private $_record;
        private $_linkToDb;
        private $_sqlStatementSignUp;

        public function __construct($email, $password) {
          //  $this->_sqlStatementSignUp = new SqlStatementSignUp();
            $this->_linkToDb = new ConnectToDb();
            $this->_linkToDb->connectToDb();
            $this->_record = new DataUserRecord(null, $password, $email);
        }

        public function actionSignUp() {

        }
    }
?>