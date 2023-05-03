<h3> Tambah Data User </h3>

<form method="POST" action="tbuser.php">
    <input type="hidden" name="opsi" value="store">
    
    <div>
        Nama Lengkap
        <input type="text" name="TxNAMA">
    </div>
    <div>
        Email
        <input type="text" name="TxEMAIL">
    </div>
    <div>
        User Name
        <input type="text" name="TxUSER">
    </div>
    <div>
        Password
        <input type="password" name="TxPASS1">
    </div>
    <div>
        Verifikasi Password 
        <input type="password" name="TxPASS2">
    </div>
    <button type="submit"> Simpan Data </button>
</form>