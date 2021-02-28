<?php
    require 'dbh.php';

    class Categorie{
        protected $CID;
        protected $categorie;


        
        public function getCID()
        {
                return $this->CID;
        }

         
        public function setCID($CID)
        {
                $this->CID = $CID;

                return $this;
        }

         
        public function getCategorie()
        {
                return $this->categorie;
        }

         
        public function setCategorie($categorie)
        {
                $this->categorie = $categorie;

                return $this;
        }
    }
    


?>