<?php
    class DataUserRecord {
        private $_username;
        private $_passwd;
        private $_email;
        private $_hashpasswd;

        public function __construct($username = null, $password, $email = null) {
            if ($username == null) {
                $this->setData(null, $password, $email);
            }
            if ($email != null) {
                $this->setData($username, $password, $email);
            } else {
                $this->setData($username, $password, null);

            }
        }

        public function setUsername($username) {
            $this->_username = $username;
        }

        public function getUsername() {
            return $this->_username;
        }

        public function setPassword($passwd) {
            $this->_passwd = $passwd;
        }

        public function setHashPassword($passwd) {
            $options = [
                'cost' => 12,
            ];
            $this->_hashpasswd = password_hash($passwd, PASSWORD_BCRYPT, $options);
        }

        public function getHashedPassword() {
            return $this->_hashpasswd;
        }

        public function setEmail($email) {
            $this->_email = $email;
        }

        public function getEmail() {
            return $this->_email;
        }

        public function setData($username, $password, $email) {
            if ($email != null) {
                $this->setEmail($email);
            }
            $this->setHashPassword($password);
            $this->setPassword($password);
            $this->setUsername($username);
        }
    }
?>