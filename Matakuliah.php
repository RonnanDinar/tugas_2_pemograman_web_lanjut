<?php
class Matakuliah{
    public $kode,$nama,$sks,$nim;

    function setData($kode,$nama,$sks,$nim){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->sks = $sks;
        $this->nim = $nim;

    }

}