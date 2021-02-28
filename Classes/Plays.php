<?php

require 'Dbh.php';

class Plays
{
protected $PID;
 protected $name;
 protected $pic;
 protected $CID;
 protected $COID;
 protected $AID;
 protected $LID;
 protected $time;
 protected $rating;
 


public function getPID()
{
return $this->PID;
}


public function setPID($PID)
{
$this->PID = $PID;

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

 public function getCOID()
 {
  return $this->COID;
 }

 public function setCOID($COID)
 {
  $this->COID = $COID;

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

 
 public function getTime()
 {
  return $this->time;
 }

 
 public function setTime($time)
 {
  $this->time = $time;

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
}

?>