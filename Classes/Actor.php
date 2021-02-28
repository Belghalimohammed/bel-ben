<?php

require 'Dbh.php';

class Actor
{
    
protected $AID;
 protected $name;
 protected $pic;
 protected $nbf;

 



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




 public function getAID()
 {
  return $this->AID;
 }

 
 public function setAID($AID)
 {
  $this->AID = $AID;

  return $this;
 }

 
 
 public function getNbf()
 {
  return $this->nbf;
 }

 
 public function setNbf($nbf)
 {
  $this->nbf = $nbf;

  return $this;
 }
}

?>