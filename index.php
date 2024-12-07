<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="simpan.php" method="POST">
    <div class="container">
        <h1>Formulir Pendaftaran</h1>
            <label for="id">NIK:</label>
            <input type="text" id="id" name="id" required>

            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Nomor Telepon:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="address">Alamat:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
            
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
