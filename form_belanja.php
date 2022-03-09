<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>


<body>
<br>
<h1>Belanja Online</h1>
<br>
<hr>
<br>
<div style="display:flex; justify-content: space-around;">
<form method="POST" action="form_belanja.php" >
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text1" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" class="btn btn-success" value="Kirim"></input>
    </div>
  </div>

</form>
<!-- DAFTAR HARGA -->

<form action="" method="post">
  <table class="table table-bordered">
    <thead class="btn-primary">
      <tr>
        <th>Daftar Harga</th>
      </tr>
    </thead>
    
    <tbody>
      <tr><td>Tv : 4.200.000</td></tr>
      <tr><td>Kulkas : 3.100.000</td></tr>
      <tr><td>Mesin Cuci : 3.800.000</td></tr>
    </tbody>
    <tfoot class="btn-primary">
    <tr>
      <td>Harga dapat Berubah Setiap Saat</td>
    </tr>
    </tfoot>
  </table>
</form>
</div>

<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah_beli = $_POST['jumlah'];

  echo 'Proses :' . $proses;
  echo '<br>Nama Customer : ' . $nama_customer;
  echo '<br>Produk Pilihan : ' . $produk;
  echo '<br>Jumlah Beli : ' . $jumlah_beli;

    // Total Belanja

    $kulkas = 3100000 * intval($jumlah_beli);
    $mesincuci = 3800000 * intval($jumlah_beli);
    $TV = 4200000 * intval($jumlah_beli);

    switch ($produk) {
        case 'KULKAS':
            echo "<br>" . "Total Belanja : " . number_format($kulkas, 0, ',', '.');
            break;
        case 'TV':
            echo "<br>" . "Total Belanja : " . number_format($TV, 0, ',', '.');
            break;
        default:
            echo "<br>" . "Total Belanja : " . number_format($mesincuci, 0, ',', '.');
            break;
    }
?>

</body>
</html>