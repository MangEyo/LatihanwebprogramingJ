<?php
    $pr = "p1";
    if(isset($_GET["pg"])){
        $pr = $_GET["pg"];
    }
    $konten = "";
    $inijudul = "";

    switch($pr){
        case "p1":
            $konten = "<h3>Halaman P1</h3>";
            $konten .= "<p>Menampilkan Halaman P1</p>";
            $inijudul = "Halaman 1";
            break;
        case "p2":
            $konten = "<h3>Halaman P2</h3>";
            $konten .= "<p>Menampilkan Halaman P2</p>";
            $inijudul = "Halaman 2";
            break;
        case "p3":
            $konten = "<h3>Halaman P3</h3>";
            $konten .= "<p>Menampilkan Halaman P3</p>";
            $inijudul = "Halaman 3";
            break;
        case "p4":
            $konten ="<h3>Halaman P4</h3>";
            $konten .= "<p>Menampilkan Halaman P4</p>";
            $inijudul = "Halaman 4";
            break;
        case "p5":
            $konten = "<h3>Halaman P5</h3>";
            $konten .= "<p>Menampilkan Halaman P5</p>";
            $inijudul = "Halaman 5";
            break;
        case "p6":
            $konten = "<h3>Halaman P6</h3>";
            $konten .= "<p>Menampilkan Halaman P6</p>";
            $inijudul = "Halaman 6";
            break;
        default:
            $konten = "<h3>Kebanyakan Angka Bang</h3>";
            $konten .= "<p>Menampilkan Halaman P1</p>";
            $inijudul = "Halaman 1";
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$inijudul;?></title>
</head>
<body>

    <a href="latihan03.php?pg=p1">Halaman1</a> <a href="latihan03.php?pg=p2">Halaman2</a> <a href="latihan03.php?pg=p3">Halaman3</a> <a href="latihan03.php?pg=p4">Halaman4</a> <a href="latihan03.php?pg=p5">Halaman5</a> <a href="latihan03.php?pg=p6">Halaman6</a>

    <?php
    echo $konten;
    ?>
</body>
</html>