<?php
function read()
{
    $link = mysqli_connect("127.0.0.1", "root", "", "perpustakaan");
    $query = "SELECT buku.id, buku.judul FROM buku JOIN favorite ON buku.id = favorite.buku_id";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 0) {
        echo "favorite kosong <br>";
        echo "<a href='../fitur.php'>Kembali</a> <br>";
    } else {
        echo "<br><table border=1 style='width:50%'>";
        echo "<tr><th style='width:10%'>ID</th><th style='width:60%'> Judul </th><th><th/></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td style='text-align: center;'>$row[0]</td><td> $row[1] </td><td><a style='text-align: center;' href='./favorite.php?fitur=delete&idbuku=$row[0]'>Hapus</a><td/></tr>";
        }
        echo "</table>";
        echo "<a href='../fitur.php'>Kembali</a> <br>";
    }

    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
    mysqli_close($link);
}
?>