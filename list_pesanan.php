<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?> 
        <a class="btn btn-success" href="index.php" role="button">Create Pesanan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>nama_pemesan</th><th>Tanggal</th>
                    <th>alamat_pemesan</th><th>No HP</th>
                    <th>Email</th><th>jumlah_pesanan</th>
                    <th>Deskripsi</th><th>produk_Id</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['nama_pemesan']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['alamat_pemesan']?></td>
                        <td><?=$row['no_hp']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['jumlah_pesanan']?></td>
                        <td><?=$row['deskripsi']?></td>
                        <td><?=$row['produk_id']?></td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
