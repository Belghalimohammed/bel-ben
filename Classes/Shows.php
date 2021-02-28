<?php

require 'Dbh.php';

class Shows
{
 protected $SID;
 protected $name;
 protected $pic;
 protected $CID;
 protected $COID;
 protected $AID;
 protected $LID;
 protected $time;
 protected $rating;
 protected $season;
 protected $ep;




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

 public function getSID()
 {
  return $this->SID;
 }

 public function setSID($SID)
 {
  $this->SID = $SID;

  return $this;
 }

 
 public function getSeason()
 {
  return $this->season;
 }

 
 public function setSeason($season)
 {
  $this->season = $season;

  return $this;
 }


 public function getEp()
 {
  return $this->ep;
 }


 public function setEp($ep)
 {
  $this->ep = $ep;

  return $this;
 }
}

?>