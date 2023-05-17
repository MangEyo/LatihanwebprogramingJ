<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM <input type="text" id="txNM" name="NIM">
        </div>
        <div>
            NAMA <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            Jenis Kelamin 
            <input type="radio" id="txJKEL" name="JKEL" value="Laki-Laki">Men
            <input type="radio" id="txJKEL" name="JKEL" value="peremPUAN">Women
        </div>
        <div>
            Jurusan
            <select name="JURUSAN" id="txJUR">
            <option value="MTI">MTI</option>
            <option value="SK">SK</option>
            <option value="KAB">KAB</option>
            <option value="DKV">DKV</option>
            <option value="TIPAR">TI-PAR</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="hobi_1" >Tidur
            <input type="checkbox" name="hobi_2" >Rebahan
            <input type="checkbox" name="hobi_3" >Turu
            <input type="checkbox" name="hobi_4" >Sleep
            <input type="checkbox" name="hobi_5" >Sirep
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script>
        function checkform(frm){
            let F = frm.elements;

            let nim = F.namedItem("NIM").value;
            let nama = F.namedItem("NAMA").value;
            let jk = F.namedItem("JKEL").value;
            let jur = F.namedItem("JURUSAN").value;
            let h1 = F.namedItem("hobi_1").checked;
            let h2 = F.namedItem("hobi_2").checked;
            let h3 = F.namedItem("hobi_3").checked;
            let h4 = F.namedItem("hobi_4").checked;
            let h5 = F.namedItem("hobi_5").checked;

            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("Jenis Kelamin: "+jk);
            console.log("JURUSAN: "+jur);
            console.log("Tidur: "+h1);
            console.log("Rebahan: "+h2);
            console.log("Turu: "+h3);
            console.log("Sleep: "+h4);
            console.log("Sirep: "+h5);
            return false;
        }
    </script>
    
</body>
</html>