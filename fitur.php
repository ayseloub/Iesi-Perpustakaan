<html>

<body>
    <?php
    include "cari.php";
    $fitur = $_GET['fitur'] ?? null;
    switch ($fitur) {
        case 'pinjam':
            header('location:pinjam/pinjam.php?fitur=read');
            exit;
        case 'cari':
        case 'whislist':
            header('location:whishlist/whislist.php?fitur=read');
        default:
            $keyword = $_GET['keyword'] ?? null;
            $listbuku = cari($keyword);
            display($listbuku);
            break;
    }
    ?>
</body>
</html>