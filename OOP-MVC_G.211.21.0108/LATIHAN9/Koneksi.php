<?php

require_once '../../config/perpustakaan.php';

class Buku extends perpustakaan {
 public function getDataPetugas($id) {
  $stmt = mysqli_query($this->konek, "SELECT * FROM tb_petugas WHERE id_petugas = '" . $id . "'");

  return $stmt;
 }
}