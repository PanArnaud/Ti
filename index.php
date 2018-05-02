<?php

class Personnage
{
  private $_force;
  private $_experience;
  private $_degats;
  
  // Getter, to access private attribute
  public function getForce() {
   return $this->_force; 
  }

  public function getExperience() {
    return $this->_experience; 
   }

  public function getDegats() {
    return $this->_degats; 
  }

  // Setter, to edit private attributes
  public function setForce($force) {
    $this->_force = $force;
  }

  public function setExperience($experience) {
    $this->_experience = $experience;
  }

  public function setDegats($degats) {
    $this->_degats = $degats;
  }
}

  $perso = new Personnage;
  $perso->setDegats($perso->getDegats() + 1);
?>
