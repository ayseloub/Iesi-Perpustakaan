<?php
function cari($keyword)
{
    $link = mysqli_connect(
        "127.0.0.1", "root", "", "perpustakaan");
        $query =
        "SELECT id, judul FROM buku WHERE judul LIKE '%$keyword%'";
        $result = mysqli_query( $link, $query );
        while ( $row = mysqli_fetch_array( $result ) ) {
        $listbuku[] = $row;
        }
        mysqli_close( $link );
        return $listbuku;
}
function display($listbuku)
{
    echo "<table border=1>";
    echo "<tr><td>ID</td><td> Judul </td></tr>";
    foreach ($listbuku as $row) {
       echo "<tr><td>$row[0]</td><td> $row[1] </td><td><a href='./pinjam/pinjam.php?fitur=add&idbuku=$row[0]&judul=$row[1]'>pinjam</td></tr>";
    }
    echo "</table>";
}
?>