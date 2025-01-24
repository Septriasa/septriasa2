<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
<form action="form4.html" method="POST">
    <fieldset>
            <legend><h1>Formulir PPDB SMKN 1 BWI</h1></legend>
    <p>
        <label>NISN :</label>
        <input type="text" name="NISN" placeholder="Masukkan nomer nisn">
    </p>
    <p>
        <label>Nama :</label>
        <input type="text" name="Nama" placeholder="Masukkan nama lengkap">
    </p>
    <p>
        <label>Tempat lahir :</label>
        <input type="text" name="Tempat lahir" placeholder="Masukkan tempat lahir anda">
    </p>
    <form action="/action_page.php">
        <label for="birthday">Tanggal lahir:</label>
        <input type="date" id="Tanggal lahir" name="tanggal lahir">
        <input type="submit">
    </form>
    <p>
        <label>Gender:</label>
        <input type="radio" name="jenkel" value="perempuan">Perempuan
        <input type="radio" name="jenkel" value="laki-laki">Laki-laki
    </p>
    <p>
        <label>Agama :</label>
        <select nama= "Agama">
            <option value="budha">Budha</option>
            <option value="islam">Islam</option>
            <option value="hindu">Hindu</option>
            <option value="katholik">Katholik</option>
            <option value="protestan">Kristen Protestan</option>
        </select>
     </p>
     <p>
        <p>Alamat :</p>
        <textarea name="alamat"cols="50" rows="10"></textarea>
    </p>
    <p>
        <label>Asal sekolah :</label>
        <input type="asal sekolah" name="asal sekolah" placeholder="Masukkan asal sekolah anda">
    </p>
    <p>
    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Jurusan 1</option>
        <option value="AKL">Akutansi Keuangan Lembaga</option>
        <option value="MPLB">Manajemen Perkantoran Layanan Bisnis</option>
        <option value="PPLG">Pengembangan Perangan Lunak dan Gim</option>
        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
        <option value="BCF">BroadCasting dan PerFilman</option>
        <option value="SP">Seni Pertunjukkan</option>
        <option value="DKV">Desain Komunikasi Visual</option>
    </select>
    </p>
    <p>
    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Jurusan 2</option>
        <option value="AKL">Akutansi Keuangan Lembaga</option>
        <option value="MPLB">Manajemen Perkantoran Layanan Bisnis</option>
        <option value="PPLG">Pengembangan Perangan Lunak dan Gim</option>
        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
        <option value="BCF">BroadCasting dan PerFilman</option>
        <option value="SP">Seni Pertunjukkan</option>
        <option value="DKV">Desain Komunikasi Visual</option>
    </select>
    </p>
    <p>
    <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Jurusan 3</option>
        <option value="AKL">Akutansi Keuangan Lembaga</option>
        <option value="MPLB">Manajemen Perkantoran Layanan Bisnis</option>
        <option value="PPLG">Pengembangan Perangan Lunak dan Gim</option>
        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
        <option value="BCF">BroadCasting dan PerFilman</option>
        <option value="SP">Seni Pertunjukkan</option>
        <option value="DKV">Desain Komunikasi Visual</option>
    </select>
    </p>
    <p>
        <label>Ekstrakulikuler yang diminati:</label>
        <input type="checkbox" name="paduan Suara">Paduan suara
        <input type="checkbox" name="basket">Basket
        <input type="checkbox" name="voli">Voli
        <input type="checkbox" name="encasa">Encasa
        <input type="checkbox" name="teater">Teater
        <input type="checkbox" name="tari">Tari
    </p>
    <p>
        <input type="submit" name="submit" value="Daftar">
    </p>
    </fieldset>
</form>
</body>
</html>