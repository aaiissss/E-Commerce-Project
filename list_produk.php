<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="#form_produk" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th><th>Nama</th>
                    <th>Harga Jual</th><th>Harga Beli</th>
                    <th>Stok</th><th>Minimal Stok</th>
                    <th>Deskripsi</th><th>Kategori Produk Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['harga_jual']?></td>
                        <td><?=$row['harga_beli']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['min_stok']?></td>
                        <td><?=$row['deskripsi']?></td>
                        <td><?=$row['kategori_produk_id']?></td>
                        <td>
<a class="badge badge-pill badge-info" href="index3.php?id=<?=$row['id']?>">Detail</a>
<a class="badge badge-pill badge-warning" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="badge badge-pill badge-danger" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
