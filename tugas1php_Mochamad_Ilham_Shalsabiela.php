<?php
$nama = "Mochamad Ilham Shalsabiela";
$email = "202151080@std.umk.ac.id";
$nomor_telepon = "081215833265";
$alamat = "Hogwart";
$pekerjaan = "Pria Pilihan Para Mertua 😎";
$foto_profil = "https://image.civitai.com/xG1nkqKTMzGDvpLrqFT7WA/03731db4-f495-459f-b54f-09d4b1568d3a/original=true/00066-1676333655.jpeg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            margin: 0;
            margin-top: 8%;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://images4.alphacoders.com/129/1298777.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }
        .profile-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-info p {
            margin-bottom: 10px;
        }
        .profile-picture {
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="container profile-container">
    <h1 class="text-center mb-4">Profil Saya</h1>
    <div class="profile-picture">
        <img src="<?php echo $foto_profil; ?>" alt="Foto Profil">
    </div>
    <div class="profile-info">
        <p><strong>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $nama; ?></p>
        <p><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $email; ?></p>
        <p><strong>HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $nomor_telepon; ?></p>
        <p><strong>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $alamat; ?></p>
        <p><strong>Pekerjaan&nbsp;:</strong> <?php echo $pekerjaan; ?></p>
    </div>
</div>

</body>
</html>
