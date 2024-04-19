<?php
function delete()
{
    $idbuku = $_GET['idbuku'] ?? null;
    var_dump($idbuku);
    if ($idbuku !== null) {
        $link = mysqli_connect("127.0.0.1", "root", "admin123", "perpustakaan");
        $query = "DELETE FROM wishlist WHERE buku_id = $idbuku";
        mysqli_query($link, $query);
        mysqli_close($link);
    }
}

?>