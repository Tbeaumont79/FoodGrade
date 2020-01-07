<?php
    class ActionSignUp {
        private $_record;
        private $_linkToDb;
        private $_sqlStatementSignUp;
        private $_success;

        public function __construct($email, $password) {
          //  $this->_sqlStatementSignUp = new SqlStatementSignUp();
            $this->_linkToDb = new ConnectToDb();
            $this->_linkToDb->connectToDb();
            $this->_record = new DataUserRecord(null, $password, $email);
            $this->_sqlStatementSignUp = new SqlStatementSignup($this->_linkToDb, $this->_record);
        }

        public function actionSignUp() {
            //check before if user already exist
            $this->_sqlStatementSignUp->prepare();
            $this->_sqlStatementSignUp->bindParam();
            $this->_sqlStatementSignUp->execute();
            $this->_success = $this->_sqlStatementSignUp->getExecuteSuccess();
            debug($this->_success);
            die('1');
        }
    }
?>