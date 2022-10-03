<?php 
  //sertakan file induk class
  require_once "bentuk2dimensi.php";
  
  class persegipanjang extends bentuk2dimensi {
    //member1 : variable
    public $panjang;
    public $lebar;
    
    //member2 : constructor
    public function __construct($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }
    
    //member3 : method
    public function namabidang() {
      echo "Persegi Panjang";
    }
    public function luasbidang() {
      $luas = $this->panjang * $this->lebar;
      return $luas;
    }
    public function kelilingbidang() {
      $keliling = 2 * ($this->panjang + $this->lebar);
      return $keliling;
    }
    public function keterangan() {
      echo 'Panjang: '. $this->panjang;
      echo '<br /> Lebar: '. $this->lebar;
    }
  }