<?php 
  //sertakan file induk class
  require_once "bentuk2dimensi.php";
  
  class lingkaran extends bentuk2dimensi {
    //member1 : variable
    public $jari2;
    
    //member2 : constructor
    public function __construct($jari2) {
      $this->jari2 = $jari2;
    }
    
    //member3 : method
    public function namabidang() {
      echo "Lingkaran";
    }
    public function luasbidang() {
      $luas = 3.14 * $this->jari2 * $this->jari2;
      return $luas;
    }
    public function kelilingbidang() {
      $keliling = 2 * 3.14 * $this->jari2;
      return $keliling;
    }
    public function keterangan() {
      echo 'Jari-Jari: '. $this->jari2;
    }
  }