<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");
    
}
require "../database.php"?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Anime yang ingin di tambahkan</p>
            <div class="input-group">
                <label for="pilih">Pilih mau di mana<br></label>
                <select name="pilih" id="pilih">
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="movie">Movie</option>
                </select>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Judul" name="judul" value="" required>
            </div>
            <div class="input-group">
                <label for="gambar">Gambar</label>
                <input type="file" placeholder="Gambar" name="gambar" value="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Submit</button>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $pilih = $_POST['pilih'];
                $judul = $_POST['judul'];
                // $gambar = $_FILES['gambar']['name'];
                // $temp = $_FILES['gambar']['tmp_name'];
                // $tipe = $_FILES['gambar']['type'];
                // $stmt = file_get_contents($_FILES);

                    $imgData = file_get_contents($_FILES['gambar']['tmp_name']);
                // move_uploaded_file($temp, '../gambar/' . $pilih . '/' . $gambar);
                $query = mysqli_query($conn, "INSERT INTO `$pilih`(`id`, `judul`, 'gambar') VALUES ('','$judul', '$imgData')");
            }
        ?> 
        </form>
    </div>
</body>
</html>