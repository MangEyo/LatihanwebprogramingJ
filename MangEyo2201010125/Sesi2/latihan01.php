<?php
    $inijudulnya= "JUDULNYA BELAKANGAN";
    $konten= "<h3>Testing PHP</h3><p>ini paragraf</p><p>ini juga paragraf part2</p><p>paragraf lagi</p><p>CBP Cuman Bisa Paragraf</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$inijudulnya; ?> </title>
</head>
<body>
    
    <?php
        echo $konten;
    ?>

</body>
</html>