<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tugas Masuk</title>
</head>
<body style="font-family: Arial; padding: 20px;">
<h2>📁 Daftar Tugas yang Telah Dikumpulkan</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama File</th>
        <th>Download</th>
    </tr>

    <?php
    $files = scandir("uploads");
    $no = 1;
    foreach($files as $file){
        if($file != "." && $file != ".."){
            echo "<tr>
                    <td>$no</td>
                    <td>$file</td>
                    <td><a href='uploads/$file' download>Download</a></td>
                </tr>";
            $no++;
        }
    }
    ?>
</table>

</body>
</html>
