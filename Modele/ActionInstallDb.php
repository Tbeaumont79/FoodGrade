<?php
    class ActionInstallDb {

        private $_actionInstallDb;
        private $_pdo;
        public function __construct() {
            $this->_actionInstallDb = new InstallDb();
            $this->_pdo = $this->_actionInstallDb->getPdo();
        }
        // WORKING ON init DB
        public function installDb() {
            $this->_actionInstallDb->setSqlCreateDb('CREATE DATABASE foodBlog');
            $this->_actionInstallDb->setSqlCreateUserTable('CREATE TABLE foodBlog.users (
                id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                username varchar(255) NOT NULL,
                email varchar(255) NOT NULL,
                passwd varchar(255) NOT NULL,
                confirmkey varchar(255) NOT NULL,
                confirme varchar(10) NOT NULL DEFAULT 0,
                subemail varchar(10) NOT NULL DEFAULT 1
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
            $this->_actionInstallDb->setSqlCreateBlogTable('CREATE TABLE foodBlog.blogpost (
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                author VARCHAR(100) NOT NULL,
                images VARCHAR(60) NOT NULL,
                blogposts VARCHAR(300) NOT NULL,
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
            $this->_actionInstallDb->initDB();
    }
        
    }
?> 