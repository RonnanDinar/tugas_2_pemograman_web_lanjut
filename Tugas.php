<?php
include 'Mahasiswa.php';
include 'Matakuliah.php';

$mahasiswaTI = new Mahasiswa();
$matkul1 = new Matakuliah();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_nama = $_POST['nama'];
    $_nim = $_POST['nim'];

    $mahasiswaTI->setData($_nim, $_nama);
    $matkul1->setData("A11.2211", "PBO", 4, $_nim);
    $mahasiswaTI->dataMatkul($matkul1->nama, $matkul1->sks, 'A');

    echo "<h2>Data Mahasiswa</h2>";
    $mahasiswaTI->printData($mahasiswaTI->getData());
    echo "<h2>Data Mata Kuliah</h2>";
    $mahasiswaTI->printData($mahasiswaTI->dataMatkul($matkul1->nama, $matkul1->sks, 'A'));

    exit(); 
}
?>
