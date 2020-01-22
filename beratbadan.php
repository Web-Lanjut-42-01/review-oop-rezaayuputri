<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengecekan Berat Badan</title>
</head>
<body>
    <center><h1>Pengecekan Berat Badan Ideal</h1>
<form action="ideal.php" method="POST">
    <table>
        <tr>
            <td>Nama Lengkap : </td>
            <td><input type="text" name="nama" required="wajib isi"></td>
        </tr>
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="bb" required="wajib isi"> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tb" required="wajib isi"> cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="jk" value="Laki-laki" required="wajib isi"> Laki-laki
            <input type="radio" name="jk" value="Wanita" required="wajib isi">Wanita</td>
        </tr>
    </table>
    <input type="submit" name="submit" value="SAVE">
</form>
</center>
    <?php 
    
    ?>
</body>
</html>