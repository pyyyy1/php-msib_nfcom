<?php 
class Pegawai {
  // variable public pada data
  public $nip;
  public $nama;
  public $jabatan;
  public $agama;
  public $status;
  
  // function constructor untuk data
  public function __construct($nip, $nama, $jabatan, $agama, $status) {
    $this->nip = $nip;
    $this->nama = $nama;
    $this->jabatan = $jabatan;
    $this->agama = $agama;
    $this->status = $status; 
  }

  // function untuk menghasilkan gaji pokok pada data
  public function setGapok() {
    switch ($this->jabatan) {
      case 'Manager': 
        $gaji_pokok = 15000000;
        break;
      case 'Asisten Manager': 
        $gaji_pokok = 10000000; 
        break;
      case 'Kepala Bagian': 
        $gaji_pokok = 7000000; 
        break;
      case 'Staff': 
        $gaji_pokok = 4000000; 
        break;
      default: 
        $gaji_pokok = 0;
        break;
    }
    return $gaji_pokok;
  }

  // function untuk menghasilkan tunjangan jabatan pada data
  public function setTunjab() {
    $tunjangan_jabatan = $this->setGapok() * 0.2;
    return $tunjangan_jabatan;
  }

  // function untuk menghasilkan tunjangan keluarga pada data
  public function setTunkel() {
    $tunjangan_keluarga = ($this->status == 'Menikah') ? 0.1 * $this->setGapok() : 0;
    return $tunjangan_keluarga;
  }

  // function untuk menghasilkan gaji pokok pada data
  public function setGator() {
    $gaji_kotor = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
    return $gaji_kotor;
  }

  // function untuk menghasilkan zakat profesi pada data
  public function setZakatProfesi() {
    $zakat = ($this->agama == 'Islam' && $this->setGator() > 6000000) ? $this->setGator() * 0.025 : 0;
    return $zakat;
  }

  // function untuk mencetak struktur gaji pegawai
  public function setTakeHomePay() {
    $take_home = $this->setGator() - $this->setZakatProfesi();
    return $take_home;
  }

  public function mencetak() {
    echo '<td>'.$this->nip.'</td>';
    echo '<td>'.$this->nama.'</td>';
    echo '<td>'.$this->jabatan.'</td>';
    echo '<td>'.$this->agama.'</td>';
    echo '<td>'.$this->status.'</td>';
    echo '<td>Rp '.number_format($this->setGapok(), 0, ',', '.').'</td>';
    echo '<td>Rp '.number_format($this->setTunjab(), 0, ',', '.').'</td>';
    echo '<td>Rp '.number_format($this->setTunkel(), 0, ',', '.').'</td>';
    echo '<td>Rp '.number_format($this->setGator(), 0, ',', '.').'</td>';
    echo '<td>Rp '.number_format($this->setZakatProfesi(), 0, ',', '.').'</td>';
    echo '<td>Rp '.number_format($this->setTakeHomePay(), 0, ',', '.').'</td>';
  }
}