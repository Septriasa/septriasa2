<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
 <form action="end.php" method="post">

<tr>
    <td>Nama karyawan</td>
    <td>:</td>
    <td>
        <input type="text" class="form-control" name="nama" id="">
    </td>
</tr>
<tr>
    <td>Divisi</td>
    <td>:</td>
    <td>
        <input type="text" class="form-control" name="divisi" id=""> 
    </td>
</tr>
<tr>
    <td>Gaji</td>
    <td>:</td>
    <td>
        <input type="number" class="form-control" name="gaji" id="">
    </td>
</tr>
<tr>
    <td>Apakah anda memiliki npwp</td>
    <td>:</td>
    <td>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="Ya">
        <label class="form-check-label" for="flexRadioDefault1"> Ya
        </label>
    </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="npwp" id="flexRadioDefault1" value="Tidak">
        <label class="form-check-label" for="flexRadioDefault1"> Tidak
        </label>
    </div>
</tr> 
    <tr>
        <td> </td>
        <td> </td>
        <td class="tombol">
        <button type="submit" class="btn btn-outline-dark" name="submit">Submit</button>
        </td>
    </tr>
    </table>
 </form>

</body>
</html>