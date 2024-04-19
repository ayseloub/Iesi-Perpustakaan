<?php
function add()
{
    $idbuku = $_GET['idbuku'] ?? null;
    if ($idbuku !== null) {
        $link = mysqli_connect("127.0.0.1", "root", "admin123", "perpustakaan");
        
        $check_query = "SELECT COUNT(*) FROM wishlist WHERE buku_id = $idbuku";
        $result = mysqli_query($link, $check_query);
        $row = mysqli_fetch_array($result);
        
        if ($row[0] > 0) {
            mysqli_close($link);
            header('location:wishlist.php?fitur=read&message=Buku dengan judul yang sama sudah ada di dalam wishlist');
        } else {
            $insert_query = "INSERT INTO wishlist (buku_id) VALUES ($idbuku)";
            mysqli_query($link, $insert_query);
        }

        mysqli_close($link);
        header('location:wishlist.php?fitur=read');
    }
}
?>