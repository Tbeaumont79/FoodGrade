<?php
    class SqlStatementSignUp extends SqlStatement {
        private $_sql;

        public function __construct($linkToDb, $record) {
            parent::__construct($linkToDb, $record);
            $this->_sql = "INSERT VALUES(user,pass,email) INTO user WHERE (user=?, pass=?, email=?)";
        }

        public function bindParam() {
            $this->_sql->bindParam(':user', $this->_record->getUsername());
            $this->_sql->bindParam(':pass', $this->_record->getHashedPass());
            $this->_sql->bindParam(':email', $this->_record->getEmail());
        }

        public function getSql() {
            return $this->_sql;
        }
    }
?>