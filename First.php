<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
    <!-- Link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>
<body>
  <center>
    <img src="../UTS/smkass.jpg" alt="Deskripsi alternatif" width="200px">
    </center>
    <center><h3>PENGGAJIAN</h3>
    <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    </center>
   <!-- content -->
   <center>
   <div class="card"  style='max-width: 40rem;'>
  <div class="card-header" style='max-width: 40rem;'>
  <div class="shadow-lg p-3 mb-3 bg-white rounded">
    <center>Data Penggajian</center>
  </div>
  <div class="card-body">
  <div class="shadow-lg p-3 mb-3 bg-white rounded">
  <form method="post" action="">
  <div class="form-group">
    <label>NO</label>
    <input type="text" class="form-control" name="no" placeholder="No">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama">
  </div>
  <div class="form-group">
    <label> Unit Pendidikan</label>
    <select class="form-control" value="Pilih Jabatan" name="Unit_Pendidikan" placeholder="Pilih Unit Pendidikan">
        <option>Pilih Unit Pendidikan</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMK">SMK</option>
    </select>
  </div>
  <div class="form-group">
  <label>Tanggal Gaji</label>
  <br>
    <input type="date" name="tanggal_gaji" class="form-control" placeholder="Tanggal Gaji">
  </div>
   <!-- SECOND CONTENT -->
   <div class="form-row">
    <div class="form-group col-md-6 mt-2">
      <center><h2>Gaji</h2></center>
      <label>Jabatan</label>
      <select class="form-control" placeholder="Pilih Jabatan" name="jabatan" placeholder="Pilih Jabatan">
        <option value="Kepala sekolah">Pilih Jabatan</option>
        <option value="Kepala sekolah">Kepala sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
      </select>
    </div>
    <div class="form-group col-md-6 mt-2">
      <center><h2>Potongan</h2></center>
      <label>BPJS</label>
      <input type="text" class="form-control" name="bpjs" placeholder="Potongan">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Lama Kerja</label>
      <input type="text" class="form-control" name="kerja" placeholder="Lama Kerja">
    </div>
    <div class="form-group col-md-6">
      <label>Pinjaman</label>
      <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Status Kerja</label>
      <select class="form-control"name="status" placeholder="Pilih Jabatana">
        <option value="TETAP" name="Tetap">Tetap</option>
        <option value="KONTRAK">Kontrak</option>
    </select>
    </div>
    <div class="form-group col-md-6">
      <label>Tabungan</label>
      <input type="text" class="form-control" name="tabungan" placeholder="Tabungan">
    </div>
    <div class="form-group col-md-6">
      <label>Lainnya</label>
      <input type="text" class="form-control" name="lainnya" placeholder="Lainnya">
    </div>
  </div>
  <br>
  <center>
  <button type="simpan" class="btn btn-success" name="simpan">Submit</button>
  </center>
</center>
</div>
 </div>
</div>
</form>
   <!-- /content -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['Unit_Pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];



     // Perhitungan gaji
     $bonus = 0;
     if($status == "TETAP"){
         $bonus += 1000000;
     } else {
         $bonus += 0;
     }

     $gaji = 0;  
     if($jabatan == "Kepala sekolah"){
         $gaji += 5000000;
     } else if($jabatan == "Wakasek"){
         $gaji += 4000000;
     } else if($jabatan == "Guru"){
         $gaji += 3000000;
     } else {
         $gaji += 2000000;
     }
     $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

    class first {
      public function pemanggilan($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gaji_bersih2) {


        // Output gaji
        echo "<br>";
        echo "<br>";
        echo "<center><div class='card border-success mb-3 ' style='max-width: 40rem;'>
                <div class='card-header'><h3>$nama2</h3></div>
                <div class='card-body '>
                  <h5 class='card-title'>Struk Gaji</h5>
                  <p class='card-text'>
                    <table>
                      <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>$no2</td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>$nama2</td>
                      </tr>
                      <tr>
                        <td>Unit Pendidikan</td>
                        <td>:</td>
                        <td>$unit_pendidikan2</td>
                      </tr>
                      <tr>
                        <td>Tanggal Gaji</td>
                        <td>:</td>
                        <td>$tanggal_gaji2</td>
                      </tr>
                      <tr>
                        <td>Jabatan</td>
                        <td> : </td>
                        <td>$jabatan2</td>
                      <tr>
                        <td>Gaji</td>
                        <td>:</td>
                        <td>$gaji2</td>
                      </tr>
                      <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td>$lama_kerja2</td>
                      </tr>
                      <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td>$status2</td>
                      </tr>
                      <tr>
                        <td>Bonus</td>
                        <td>:</td>
                        <td>$bonus2</td>
                      </tr>
                      <tr>
                        <td>BPJS</td>
                        <td>:</td>
                        <td>$bpjs2</td>
                      </tr>
                      <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td>$pinjaman2</td>
                      </tr>
                      <tr>
                        <td>Tabungan</td>
                        <td>:</td>
                        <td>$tabungan2</td>
                      </tr>
                      <tr>
                        <td>Lainnya</td>
                        <td>:</td>
                        <td>$lainnya2</td>
                      </tr>
                      <tr>
                        <td>Gaji Bersih</td>
                        <td>:</td>
                        <td>$gaji_bersih2</td>
                      </tr>
                    </table>
                  </p>
                  </center>
                </div>
              </div>";
      }
    }
}

$cetak = new first();
$cetak->pemanggilan($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
?>

