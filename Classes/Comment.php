<?php
  require 'dbh.php';

  class Comment{
    protected $COID;
    protected $ID;
    protected $TID;
    protected $comment;
    protected $type;
    protected $date_time;

    

    
    public function getCOID()
    {
        return $this->COID;
    }

     
    public function setCOID($COID)
    {
        $this->COID = $COID;

        return $this;
    }

     
    public function getID()
    {
        return $this->ID;
    }

     
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

     
    public function getTID()
    {
        return $this->TID;
    }

     
    public function setTID($TID)
    {
        $this->TID = $TID;

        return $this;
    }

     
    public function getComment()
    {
        return $this->comment;
    }

     
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

     
    public function getType()
    {
        return $this->type;
    }

    
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    
    public function getDate_time()
    {
        return $this->date_time;
    }

    
    public function setDate_time($date_time)
    {
        $this->date_time = $date_time;

        return $this;
    }
  }

?>