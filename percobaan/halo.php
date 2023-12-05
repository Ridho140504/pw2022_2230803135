<?php
if (!result){
    echo mysqli_error($conn)
}

$mhs = mysqli_fetch_row($result);
var_dump($mhs [3]);

$mhs = mysqli_fetch_assoc($result);
var_dump($mhs["jurusan"]);

$mhs = mysqli_fetch_array($result);
var_dump($mhs);

$mhs = mysqli_fetch_object($result);
var_dump($mhs->nama);

//Ambil Data Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data mahasiwa dari object result
//mysqli_fetch_row() //mengembalikan array numerik
//mysqli_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli_fetch_object()

//while ( $mhs = mysqli_fetch_assoc($result) ){
//var_dump($mhs);

//}
?>

<?php $i =1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"</td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

        <div style = position:absolute; top:0; bottom:0;
        left:0; right:0; background-color:black;
        font-size:100px; color:red; text-align:center;>
        HAHAHAHAHA ANDA TELAH DI HACK!!!!</div>