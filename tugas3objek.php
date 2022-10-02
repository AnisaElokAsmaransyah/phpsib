<?php
require 'tugas3class.php';
//ciptakan object
$anggi = new Pegawai('P001','Anggi','Manager','Non Muslim','Menikah');
$bunga = new Pegawai('P002','Bunga','Asisten Manager','Muslim','Menikah');
$ardito = new Pegawai('P003','Ardhito Pramono','Staff','Muslim','Menikah');
$leo = new Pegawai('P004','Leo','Supervisor','Non Muslim','Belum Menikah');
$retno = new Pegawai('P005','Retno Hapsari','Staff','Muslim','Belum Menikah');
//use member class
// $cr7->menabung(3000000); 
// $leo->menabung(5000000);

// $neur->menarik(3000000);
// $salah->menarik(5000000);

echo '<h3 align="center">'.Pegawai::DATA.'</h3>';
$anggi->mencetak();
$bunga->mencetak();
$ardito->mencetak();
$leo->mencetak();
$retno->mencetak();
echo 'Jumlah Data Pegawai: '.Pegawai::$jml;
