<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);

include "koneksi.php";
$id= $_POST['id'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$merek = $_POST['merek'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar_old = $_POST['gambar_old'];
$gambar = $_FILES['gambar']['name'];
if ($gambar == null) {
    $query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', harga='$harga', stok='$stok', merek='$merek', kategori='$kategori', deskripsi='$deskripsi', image='$gambar_old' where id='$id'");
    if($query = true){
        header("location:admin.php?pesan=update");
    }else{
        header("location:update.php?id=$id&pesan=gagal");
    }
}
else{
    $ekstensi_diperbolehkan	= array('png','jpg');
	$tipe_file = $_FILES['gambar']['type'];
	$ukuran	= $_FILES['gambar']['size'];
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$path = "images/".$gambar;
	if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, $path);
            $query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', harga='$harga',  stok='$stok', merek='$merek', kategori='$kategori', deskripsi='$deskripsi', image='$gambar' where id='$id'");
			if($query = true){
                header("location:admin.php?pesan=update");
			}else{
                header("location: update.php?id=$id&pesan=gagal");
			}
		    }else{
				header("location: update.php?id=$id&pesan=ukuran");
		    }
			}else{
			header("location:update.php?id=$id&pesan=ektensi");

	       }
}
// var_dump($gambar);


?>