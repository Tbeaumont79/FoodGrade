<?php
    class InstallDb {
        private $_dsn;
        private $_pdo;
        private $_user;
        private $_passwd;
        private $_sqlCreateDb;
        private $_sqlCreateUserTable;
        private $_sqlCreateUserBlogPost;

        public function __construct() {
            $this->_dsn = 'mysql:port=8889;host=127.0.0.1';
            $this->_user = 'root';
            $this->_passwd = 'root';
            $this->_pdo = new PDO($this->_dsn, $this->_user, $this->_passwd);
            $this->_sqlCreateDb = '';
            $this->_sqlCreateUserBlogPost = '';
            $this->_sqlCreateUserTable = '';
        }
        
        public function setSqlCreateDb($sqlCreateDb) {
            $this->_sqlCreateDb = $sqlCreateDb;
        }

        public function getPdo() {
            return $this->_pdo;
        }

        public function getSqlCreateDb() {
            return $this->_sqlCreateDb;
        }

        public function setSqlCreateUserTable($sqlCreateUserTable) {
            $this->_sqlCreateUserTable = $sqlCreateUserTable;
        }

        public function getSqlCreateUserTable() {
            return $this->_sqlCreateUserTable;
        }

        public function setSqlCreateBlogTable($sqlCreateBlogTable) {
            $this->_sqlCreateBlogPost = $sqlCreateBlogTable;
        }

        public function getSqlCreateBlogTable() {
            return $this->_sqlCreateBlogPost;
        }

        public function initDB() {
            $this->_pdo->exec($this->_sqlCreateDb);
            $this->_pdo->exec($this->_sqlCreateUserBlogPost);
            $this->_pdo->exec($this->_sqlCreateUserTable);   
        }
    }

?>