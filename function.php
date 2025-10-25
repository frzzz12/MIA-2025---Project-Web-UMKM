<?php 

$hub = mysqli_connect('localhost', 'root', 'Frozzyt123', 'mia');



function query($query) {
        global $hub;
        $result = mysqli_query($hub, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
}


function cari($search) {
    global $hub;

    $qr = mysqli_query($hub, "SELECT * FROM umkm WHERE 
        nama_umkm LIKE '%$search%'
    ");

    return query("SELECT * FROM umkm WHERE 
        nama_umkm LIKE '%$search%'");
}

?>