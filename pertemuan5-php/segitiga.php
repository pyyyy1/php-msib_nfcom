<?php 
  //sertakan file induk class
  require_once "bentuk2dimensi.php";
  
  class segitiga extends bentuk2dimensi {
    //member1 : variable
    public $alas;
    public $tinggi;
    
    //member2 : constructor
    public function __construct($alas, $tinggi) {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }
    
    //member3 : method
    public function sisiMiring() {
      $sisiMiring = sqrt(pow($this->alas,2) + pow($this->tinggi,2));
      return $sisiMiring;
    }
    public function namabidang() {
      echo "Segitiga";
    }
    public function luasbidang() {
      $luas = 0.5 * $this->alas * $this->tinggi;
      return $luas;
    }
    public function kelilingbidang() {
      $keliling = $this->alas + $this->tinggi + $this->sisiMiring();
      return $keliling;
    }
    public function keterangan() {
      echo 'Alas: '. $this->alas;
      echo '<br /> Tinggi: '. $this->tinggi;
      echo '<br /> Sisi miring: '. $this->sisiMiring();
    }
  }