<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi dan Dekripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enkripsi dan Dekripsi Teks</h1>
        <form action="vigenere chipper.php" method="POST">
            <label for="text">Teks:</label>
            <input type="text" name="text" id="text" placeholder="Masukkan teks...">
            <br><br>
            <label for="shift">Jumlah Pergeseran:</label>
            <input type="number" name="shift" id="shift" placeholder="Masukkan jumlah pergeseran...">
            <br><br>
            <button type="submit" name="enkripsi">Enkripsi</button>
            <button type="submit" name="dekripsi">Dekripsi</button>
        </form>
        <br><br>
        <label for="result">Hasil:</label>
        <textarea id="result" rows="4" cols="50" readonly></textarea>
    </div>
</body>
</html>