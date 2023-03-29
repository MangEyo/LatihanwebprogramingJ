<?php
$mhs = array(
    array("nama" => "Rimuru", "nim" => "22347215", "asal" => "Jura Tempest"),
    array("nama" => "Kirito", "nim" => "22345671", "asal" => "Aincard"),
    array("nama" => "Goku", "nim" => "227467596", "asal" => "Namek"),
    array("nama" => "Naruto", "nim" => "17457713", "asal" => "Indonesia")
);

foreach ($mhs as $idx => $data) {
    echo "Data Ke-". $idx."<br>";
    foreach ($data as $a => $nval){
        echo $a. " ". $nval."<br>";
    }
    echo"<br>";
}