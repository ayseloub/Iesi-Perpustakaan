<?php
function delete()
{
    $idbuku = $_GET['idbuku'] ?? null;
    var_dump($idbuku);
    if ($idbuku !== null) {
        $link = mysqli_connect("127.0.0.1", "root", "", "perpustakaan");
        $query = "DELETE FROM favorite WHERE buku_id = $idbuku";
        mysqli_query($link, $query);
        mysqli_close($link);
    }
}

?>