<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil perhitungan gaji</title>
    
</head>
<body>
       
 <?php
if (isset($_POST['submit'])) {

            $gajiPerbulan = floatval($_POST['gaji']);
            $npwp = $_POST['npwp'];
            $gajiPertahun = $gajiPerbulan * 12;
            $potongPajak = 0;

            if ($gajiPertahun > 54000000) {
                if ($npwp == "Ya") {
                    $potongPajak = $gajiPertahun * 0.15;
                }else {
                    $potongPajak = $gajiPertahun * 0.20;
                }
            }
            
            $gajiBersihBulanan = ($gajiPertahun - $potongPajak) /12;
            $potongPajakPerbulan = $potongPajak /12;
            $gajiKotorPerbulan = $gajiPertahun /12;
        } ?>
        <table>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><?= $_POST["nama"]?></td>
                </tr>
                <tr>
                    <td>DIVISI</td>
                    <td>:</td>
                    <td><?= $_POST["divisi"]?></td>
                </tr> 
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td>
                    <?= $_POST["npwp"]?>
                    </td>
                </tr>
                <tr>
                    <td>Gaji Kotor Pertahun</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($gajiPertahun,0,',','.')?>
                    </td>
                </tr>
                
                <tr>
                    <td>Potongan pajak pertahun</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($potongPajak,0,',','.')?></td>
                </tr>
                <tr>
                    <td>Potongan gajak perbulan</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($potongPajakPerbulan,0,',','.')?></td>
                </tr>
                <tr>
                    <td>Gaji bersih perbulan</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($gajiBersihBulanan,0,',','.')?></td>
                </tr>
            </table>
        </form>
    </div>
 
</body>
</html>