<html>
<head>
    <title>Penilaian Nilai</title>
</head>
<body>
    <h2>Penilaian Nilai</h2>

    <form method="post">
        <label for="nilai">Masukkan Nilai (0 - 100): </label>
        <input type="number" id="nilai" name="nilai" min="0" max="100">
        <input type="submit" value="Cek Nilai">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];

            if ($nilai >= 90 && $nilai <= 100) {
                echo "Nilai $nilai = A";
            } elseif ($nilai >= 80 && $nilai < 90) {
                echo "Nilai $nilai = B";
            } elseif ($nilai >= 70 && $nilai < 80) {
                echo "Nilai $nilai = C";
            } elseif ($nilai >= 0 && $nilai < 70) {
                echo "Nilai $nilai = D";
            } else {
                echo "Nilai wajib di antara 0 - 100.";
            }
        }
    ?>
</body>
</html>