<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        if(isset($_POST['PpdbSiswa']))
        {
    ?>
        <table border=1 style="border-collapse : collapse: width : 50%:">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td>
                    <?= $_POST['NISN'] ?>
                  </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $_POST['Nama'] ?>
                  </td>
              </tr>
              <tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td>
                    <?= $_POST['Tempatlahir'] ?>
                  </td>
              </tr>
              <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td>
                    <?= $_POST['Tanggallahir'] ?>
                  </td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <?= $_POST['jenkel'] ?>
                  </td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= $_POST['agama'] ?>
                  </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $_POST['alamat'] ?>
                  </td>
              </tr>
              <tr>
                <td>Asal sekolah</td>
                <td>:</td>
                <td>
                    <?= $_POST['asalsekolah'] ?>
                  </td>
              </tr>
              <tr>
                <td>Pilih Jurusan 1</td>
                <td>:</td>
                <td>
                    <?= $_POST['Jurusan1'] ?>
                  </td>
              </tr>
              <tr>
                <td>Pilih Jurusan 2</td>
                <td>:</td>
                <td>
                    <?= $_POST['Jurusan2'] ?>
                  </td>
              </tr>
              <tr>
                <td>Pilih Jurusan 3</td>
                <td>:</td>
                <td>
                    <?= $_POST['Jurusan3'] ?>
                  </td>
              </tr>
              <tr>
                <td>Ekstrakulikuler yang diminati</td>
                <td>:</td>
                <td>
                    <?= $_POST['Ekstrakulikuleryangdiminati'] ?>
                  </td>
              </tr>
    <?php    } ?>
</body>
</html>