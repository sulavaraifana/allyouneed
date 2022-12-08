<?php 
include "koneksi.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
// print_r($_FILES);
// die;

$namaproduk = $_POST['nama'];
$merek = $_POST['merek'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];



$nama = $_FILES['gambar']['name'];
$tipe = $_FILES['gambar']['type'];
$tmp = $_FILES['gambar']['tmp_name'];
$error = $_FILES['gambar']['error'];
$size = $_FILES['gambar']['size'];

$ext = pathinfo($nama, PATHINFO_EXTENSION);

$extension = strtolower($ext);
$allowed_extension = array('png', 'jpg', 'jpeg');
$new_image_name = uniqid("image-", true) . "." . $extension;
$upload_path = 'images/' . $new_image_name;
$move = move_uploaded_file($tmp, $upload_path);

if ($error == 0) {
   
    if (in_array($extension, $allowed_extension) === true) {
       
        $sql = $koneksi->query("INSERT INTO `produk`(
            `id`,
            `nama`,
            `merek`,
            `harga`,
            `stok`,
            `kategori`,
            `deskripsi`,
            `image`
        )
        VALUES(
            DEFAULT,
            '$namaproduk',
            '$merek',
            '$harga',
            '$stok',
            '$kategori',
            '$deskripsi',
            '$new_image_name'
        )");
        // echo $sql;
        if ($sql) {
            echo "<script>alert('Berhasil')</script>";
        } else {
            echo "<script>alert('G Berhasil')</script>";
        }
    }
} else {
    echo "<script>alert('G Berhasil')</script>";
}

    header("location:admin.php?pesan=input");
    echo "
    <pre>";
    echo "</pre>"
?>