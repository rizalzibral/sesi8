<h3>Daftar user</h3>
<table>
    <tr>
        <td>#</td>
        <td>nama lengkap</td>
        <td>email</td>
        <td><a href="tbUSER.php?aksi=new">tambah</a></td>
    </tr>
<?php
$sql = "SELECT nama, email, iduser FROM tbuser ORDER BY nama ;";
$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){
?>
    <tr>
        <td><?=$cx?></td>
        <td><?=$h["nama"]?></td>
        <td><?=$h["email"]?></td>
        <td>ubah hapus</td>
    </tr>
<?php
    $cx++;
}
?>

</table>