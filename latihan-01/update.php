<?php 

require_once "koneksi.php";

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql = "UPDATE penduduk
        SET
        nik = '$nik',
        nama = '$nama',
        jenis_kelamin = '$jk',
        alamat = '$alamat'
        WHERE id = '$id'
    ";

mysqli_query($connection, $sql);


if (mysqli_affected_rows($connection) > 0) {
    echo "
        <script>
            alert('data berhasil di update')
            document.location.href = 'index.php'
        </script>
    ";
} else {

    echo "
        <script>
            alert('data gagal di diupdate')
        </script>
    ";

}


?>