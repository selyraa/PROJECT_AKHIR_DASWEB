<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    
</head>
<body>
    <?php
        include "koneksi.php";

        $cari = mysqli_query($connect, "SELECT u.namaLengkap, m.namaMobil, p.jenisPembayaran, t.tglMulai, t.tglKembali, t.durasi, t.totalHarga FROM transaksi t
        INNER JOIN tarif tr ON tr.idTarif = t.idTarif INNER JOIN mobil m ON m.idMobil = tr.idMobil INNER JOIN metodepembayaran p 
        ON p.idPembayaran = t.idPembayaran INNER JOIN user u ON u.idUser = t.idUser ORDER BY t.idTransaksi");
        // $data = mysqli_fetch_array($cari);

    ?>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mobil</th>
                <th>Nama Lengkap</th>
                <th>Jenis Pembayaran</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Durasi</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($cari)){
            ?>
    <tr>
        <th scope="row"><?php echo $no; ?></th>
        <th><?php echo $data['namaMobil']?></th>
        <th><?php echo $data['namaLengkap']?></th>
        <th><?php echo $data['jenisPembayaran']?></th>
        <th><?php echo $data['tglMulai']?></th>
        <th><?php echo $data['tglKembali']?></th>
        <th><?php echo $data['durasi']?> hari</th>
        <th>Rp. <?php echo number_format($data['totalHarga'])?></th>
    </tr>
    <?php
        $no++;
    }
    ?>
  </tbody>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>