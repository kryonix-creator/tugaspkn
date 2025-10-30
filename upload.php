<?php
$nama = $_POST['nama'];
$file = $_FILES['file']['name'];
$target = "uploads/" . basename($file);

// Jika folder belum ada, buat otomatis
if (!file_exists("uploads")) {
    mkdir("uploads", 0777, true);
}

if(move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    echo "<h2>✅ Tugas berhasil dikumpulkan!</h2>";
    echo "<p>Nama: <b>$nama</b></p>";
    echo "<p>File: <b>$file</b></p>";
    echo "<a href='index.html'>Kembali</a>";
} else {
    echo "<h2>❌ Gagal upload. Coba lagi.</h2>";
}
?>
