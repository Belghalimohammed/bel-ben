<?php

require 'Dbh.php';

class Langue
{
    
protected $LID;
 protected $langue;


 
public function getLID()
{
return $this->LID;
}


public function setLID($LID)
{
$this->LID = $LID;

return $this;
}

 public function getLangue()
 {
  return $this->langue;
 }


 public function setLangue($langue)
 {
  $this->langue = $langue;

  return $this;
 }
}

?>