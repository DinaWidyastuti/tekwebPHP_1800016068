<?php
$nama=$_POST['NAMA'];
$nim=$_POST['NIM'];
$kelamin=$_POST['KELAMIN'];
$studi=$_POST['STUDI'];
$alamat=$_POST['ALAMAT'];
$bahasa=$_POST['BAHASA'];
?>

<!DOCTYPE html>
<html>
<head>
        <title>Biodata</title>
</head>
<body>
    <table width="500" border="1">
        <tr>
            <td>NIM</td>
            <td><?=$nim; ?></td>
        </tr>

        <tr>
            <td>NAMA</td>
            <td><?=$nama; ?></td>
        </tr>

        <tr>
            <td>JENIS KELAMIN</td>
            <td><?=$kelamin; ?></td>
        </tr>

        <tr>
            <td>ALAMAT</td>
            <td><?=$alamat; ?></td>
        </tr>

        <tr>
            <td>PROGRAM STUDI</td>
            <td><?=$studi; ?></td>
        </tr>

        <tr>
            <td>BAHASA PEMOGRAMAN YANG DIKUASAI</td>
            <td><?=$bahasa; ?></td>
        </tr>
    </table>
</body>
</html>