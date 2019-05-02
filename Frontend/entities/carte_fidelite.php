<?php


class carte
{
 private $num;
 private $pts;
 private $identifiant;
  private $password;
 



 //public function __construct () {}

 public  function __construct($identifiant,$num,$pts,$password) 
    {
     $this->pts=$pts;
     $this->num=$num;
     $this->identifiant=$identifiant;
     $this->password=$password;
     }
     
 

 public function getpassword() {
     return $this->password;
 }
  public function getId() {
     return $this->identifiant;
 }

 public  function getNum() {
     return $this->num;
 }

 public function getPts() {
     return $this->pts;
 }

 public function setId($identifiant) {
     $this->identifiant=$identifiant;
 }

 public function setNum($num){
     $this->num=$num;
 }

 public function setPts($pts) {
     $this->pts=$pts;
 }
 public function setpassword($password) {
     $this->password=$password;
 }
}
?>