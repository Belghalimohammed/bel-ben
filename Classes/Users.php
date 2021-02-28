<?php
    require 'dbh.php';

    class Users{

        protected $ID;
        protected $uname;
        protected $pass;
        protected $pic;
        protected $email;

        
        public function getID()
        {
                return $this->ID;
        }

        
        public function setID($ID)
        {
                $this->ID = $ID;

                return $this;
        }

        
        public function getUname()
        {
                return $this->uname;
        }

         
        public function setUname($uname)
        {
                $this->uname = $uname;

                return $this;
        }

         
        public function getPass()
        {
                return $this->pass;
        }

         
        public function setPass($pass)
        {
                $this->pass = $pass;

                return $this;
        }

        
        public function getPic()
        {
                return $this->pic;
        }

        
        public function setPic($pic)
        {
                $this->pic = $pic;

                return $this;
        }

        
        public function getEmail()
        {
                return $this->email;
        }

        
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }

?>