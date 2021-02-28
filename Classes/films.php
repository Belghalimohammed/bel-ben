<?php
    require 'dbh.php';

    class Film{
        protected $FID;
        protected $name;
        protected $time;
        protected $link;
        protected $year;
        protected $rating;
        protected $pic;
        protected $CID;
        protected $AID;
        protected $LID;
        protected $COID;

        

        
        public function getFID()
        {
                return $this->FID;
        }

      
        public function setFID($FID)
        {
                $this->FID = $FID;

                return $this;
        }

         
        public function getName()
        {
                return $this->name;
        }

       
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

         
        public function getTime()
        {
                return $this->time;
        }

         
        public function setTime($time)
        {
                $this->time = $time;

                return $this;
        }

         
        public function getLink()
        {
                return $this->link;
        }

     
        public function setLink($link)
        {
                $this->link = $link;

                return $this;
        }

         
        public function getYear()
        {
                return $this->year;
        }

         
        public function setYear($year)
        {
                $this->year = $year;

                return $this;
        }

         
        public function getRating()
        {
                return $this->rating;
        }

         
        public function setRating($rating)
        {
                $this->rating = $rating;

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

         
        public function getCID()
        {
                return $this->CID;
        }

         
        public function setCID($CID)
        {
                $this->CID = $CID;

                return $this;
        }

       
        public function getAID()
        {
                return $this->AID;
        }

         
        public function setAID($AID)
        {
                $this->AID = $AID;

                return $this;
        }

         
        public function getLID()
        {
                return $this->LID;
        }

        
        public function setLID($LID)
        {
                $this->LID = $LID;

                return $this;
        }

         
        public function getCOID()
        {
                return $this->COID;
        }

        
        public function setCOID($COID)
        {
                $this->COID = $COID;

                return $this;
        }
    }
?>