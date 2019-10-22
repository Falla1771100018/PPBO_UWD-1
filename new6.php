<?php
print "==========================<br>";
print "TUGAS  POLIMORPHISM<br>";
print "==========================<br>";
class kendaraan{

private $merk;
private $harga;
private $negara;

function __construct ($merk,$harga,$negara){
$this->merk=$merk;
$this->harga=$harga;
$this->negara=$negara;
}

function BacaMerk(){
return $this->merk;
}

function BacaHarga(){
return $this->harga;
}
function BacaNegara(){
return $this->negara;
}
}

$Motor = new kendaraan("Jazz",100000000,"Australia");
echo " Merk Kendaraan = ".$Motor->BacaMerk()."<br>";
echo " Merk Motor= ".$Motor->BacaHarga()."<br>";
echo " Merk Asal= ".$Motor->BacaNegara()."<br>";
echo " ====================<br>";

$Motor = new kendaraan("Pajero",150000000,"Amerika");
echo " Merk Kendaraan = ".$Motor->BacaMerk()."<br>";
echo " Merk Motor= ".$Motor->BacaHarga()."<br>";
echo " Merk Asal= ".$Motor->BacaNegara()."<br>";
echo " ====================<br>";

$Motor = new kendaraan("Innova",200000000,"India");
echo " Merk Kendaraan = ".$Motor->BacaMerk()."<br>";
echo " Merk Motor= ".$Motor->BacaHarga()."<br>";
echo " Merk Asal= ".$Motor->BacaNegara()."<br>";
?>