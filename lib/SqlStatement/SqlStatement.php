<?php
    class SqlStatement {
        protected $_sql;
        private $_pdoStatement;
        private $_pdo;
        private $_executeSuccess;
        private $_dataArray;

        public function __construct($linkToDb, $record) {
            $this->_pdoStatement = null;
            $this->_pdo = $linkToDb->getPdo();
            $this->_executeSuccess = '';
            $this->_dataArray = [];
        }

        public function getExecuteSuccess() {
            return $this->_executeSuccess;
        }

        public function getSql() {

        }

        public function prepare() {
            $this->_pdoStatement = $this->_pdo->prepare($this->_sql);
        }

        public function execute() {
            $this->_executeSuccess = $this->_pdoStatement->execute();
        }

        public function fetch() {
            $this->_dataArray = $this->_pdoStatement->fetch(PDO::FETCH_ASSOC);
        }

        public function getDataArray() {
            return $this->_dataArray;
        }

    }
?>