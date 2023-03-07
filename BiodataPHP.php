<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="STYLE.css">
</head>
<body>
    <div style="margin-top: 20px;"></div>
        <div class="boxx"><br>
            <div class="elips">
                <h2>BIODATA DIRI</h2>    
            </div><br>
            <img class="lingkaran" src="Foto.png"> <br>
            <table><br>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo "Muhammad Aldi Maulana" ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <?php $tanggal_lahir = "2003-03-19"; ?>
                    <?php $usia = date_diff(date_create($tanggal_lahir), date_create('today'))->y; ?>
                    <td><?php echo $usia . " Tahun" ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo "Pria" ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo "Islam" ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo "Perum Citra Gading B2/37 Jumputrejo-Sukodno-Sidoarjo" ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo "aldimaulana1978@gmail.com" ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td><?php echo "08113199299" ?></td>
                </tr>
            </table>
            <br>

            <h3 style="color: #412700; margin-left: 20px ;" >Riwayat Pendidikan</h3>
            <div class="kotak1">
                <ul>
                    <li><?php echo "2009-2015 : SDN WAGE 2" ?></li>
                    <li><?php echo "2015-2018 : SMPN 2 GEDANGAN" ?></li>
                    <li><?php echo "2018-2021 : SMKN 3 SURABAYA" ?></li>
                </ul>
            </div>
            <h3 style="color: #412700; margin-left: 250px ;" >Hobi</h3>
            <div class="kotak2">
                <ul>
                    <li><?php echo "Berenang" ?></li>
                    <li><?php echo "Memancing" ?></li>
                    <li><?php echo "Futsal" ?></li>
                </ul>
            </div>
            <h3 style="color: #412700; margin-left: 400px ;" >Pengalaman Organisasi</h3>
            <div class="kotak3">
                <ul>
                    <li><?php echo "Kepanitiaan Kulaih Tamu (PRODI)" ?></li>
                    <li><?php echo "Kepanitiaan Loka Karya (FAKULTAS)" ?></li>
                    <li><?php echo "Kepanitiaan Friendship Camp (UKM)" ?></li>
                </ul>
            </div>
        </div>      
</body>
</html>