<?php session_start();
    require "database.php";
    $belum = "javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut')";
    $ongoing = mysqli_query($conn, "SELECT * FROM ongoing ORDER BY id DESC;");
    $movie = mysqli_query($conn, "SELECT * FROM movie ORDER BY id DESC;");
    $completed = mysqli_query($conn, "SELECT * FROM completed ORDER BY id DESC;");
 ?>

<!DOCTYPE HTML>
<HTML lang="en">
    <head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anime AexonJP</title>
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
        <link rel="stylesheet" href="cssabdullah.css">
        <?php
            if (!isset($_SESSION['username'])) {
                $_SESSION['priv'] ='default';
            }
        ?>
    </head>
    <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;' class="body">
        <a class="gif" href="#menu"><img src= "menhera.gif"></a> 
        <header class="menu" id="menu">
            <ul>
                <?php if($_SESSION['priv'] == 'admin'){
                    echo("<a href=");
                    echo('"');
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");echo('"');
                    echo(">Home</a><a href=");echo('"');
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");echo('"');
                    echo(">Daftar Anime</a><a href=");echo('"');
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");echo('"');
                    echo(">Movie</a><a href=");echo('"');
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");echo('"');
                    echo(">Ongoing</a>");
                    echo("<a href='database'>Database</a>");
                }
                elseif ($_SESSION['priv'] == 'user'){
                    echo("<a href='request'>Request</a>");
                }
                ?>
                <a href='about/'>About Me</a>
                <?php
                if (isset($_SESSION['username'])) {
                    echo("<a class='login' href='login/logout.php'>Logout</a>");
                    
                } else {
                    echo("<a class='login' href='login/'>Login</a>");}
                    ?>
            </ul>
        </header>
        
        <header class="border">
            <a href="<?php echo($belum);?>">
            <img src="awal/oie_OyXVH1TPqSMu.png" alt="gambar"> 
            </a>
        </header>
        <?php
                    if ($_SESSION['priv'] == 'user') {
                        echo("<div class='masuk'>SELAMAT DATANG MEMBER KU TERSAYANG</div>");
                    }
                    elseif ($_SESSION['priv'] == 'admin'){
                        echo("<div class='masuk'>SELAMAT DATANG WAHAI SEPUH TERTINGGI</div>");
                    }
                    ?>
        <table border="0" width="90%" align="center">
            <tr>
                <td height="100px">
                    <div class="container-ongoing">
                            <div class="text">ONGOING</div>
                            <div class="more"><a href="<?php echo($belum);?>">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <?php $i =0; while ($row = mysqli_fetch_assoc($ongoing)) :?>
                        <div class="content-ongoing"><a href="<?php echo($belum);?>">
                            <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                        </a></div><?php ; $i++; if ($i > 2): break;endif;endwhile;?>
                    </div>
                    <div class="content-ongoings">
                        <?php while ($row = mysqli_fetch_assoc($ongoing)) :?>
                            <div class="content-ongoing"><a href="<?php echo($belum);?>">
                                <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                            </a></div><?php ; $i++; if ($i > 5): break;endif;endwhile;?>
                    </div>
                    <div class="container">
                        <div class="text">COMPLETED</div>
                        <div class="more"><a href="<?php echo($belum);?>">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <?php $i =0; while ($row = mysqli_fetch_assoc($completed)) :?>
                        <div class="content-ongoing"><a href="<?php echo($belum);?>">
                            <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                        </a></div><?php ; $i++; if ($i > 2): break;endif;endwhile;?>
                    </div>
                    <div class="content-ongoings">
                        <?php while ($row = mysqli_fetch_assoc($completed)) :?>
                        <div class="content-ongoing"><a href="<?php echo($belum);?>">
                            <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                        </a></div><?php ; $i++; if ($i > 5): break;endif;endwhile;?>
                    </div>
                    <div class="container">
                        <div class="text">MOVIE</div>
                        <div class="more"><a href="<?php echo($belum);?>">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <?php $i =0; while ($row = mysqli_fetch_assoc($movie)) :?>
                        <div class="content-ongoing"><a href="<?php echo($belum);?>">
                            <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                        </a></div><?php ; $i++; if ($i > 2): break;endif;endwhile;?>
                    </div>
                    <div class="content-ongoings">
                        <?php while ($row = mysqli_fetch_assoc($movie)) :?>
                        <div class="content-ongoing"><a href="<?php echo($belum);?>">
                            <img src="data:image/jpeg;base64,<?=base64_encode($row["gambar"])?>" alt="gambar"> <div class="isi"><?=$row["judul"]?></div>
                        </a></div><?php ; $i++; if ($i > 5): break;endif;endwhile;?>
                    </div>
                </td>
            </tr>

        </table>
        
    </body>
</HTML>
