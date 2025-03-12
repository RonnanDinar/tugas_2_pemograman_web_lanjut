<?php

class Mahasiswa{

    public $nim,$nama;
    private $IPK = 0;

    function setData($nim, $nama){
        $this->nim = $nim;
        $this->nama = $nama;    
    }

    function getData(){
        $mhs = [
            'nim' => $this->nim,
            'nama' =>$this->nama,
        ];
    return $mhs;
    }

    function printData($data = null){
        if(!is_null($data))
        {
            foreach ($data as $key => $value){
                echo $value,"<br>";
            }
        }
        else{
            echo "data kosong";
        }
    }


    

    function dataMatkul($namaMatkul, $sks, $nilai){
        $data = [
            'nim' => $this->nim,
            'namaMatkul' => $namaMatkul,
            'sks' => $sks,
            'nilai' => $nilai,
        ];
    return $data;
    }
}