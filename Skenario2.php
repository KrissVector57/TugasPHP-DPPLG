<html>
<head>
    <title>Penentuan Waktu</title>
</head>
<body>
    <h2>Penentuan Waktu</h2>

    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM): </label>
        <input type="time" id="jam" name="jam">
        <input type="submit" value="Cek Waktu">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jam = $_POST['jam'];
            list($hour, $minute) = explode(":", $jam);
            $jamTotal = (int)$hour * 60 + (int)$minute;

            if ($jamTotal >= 0 && $jamTotal < 240) {
                echo "$jam = Dini hari";  // 00:00 - 04:00
            } elseif ($jamTotal >= 240 && $jamTotal < 600) {
                echo "$jam = Pagi";  // 04:00 - 10:00
            } elseif ($jamTotal >= 600 && $jamTotal < 900) {
                echo "$jam = Siang";  // 10:00 - 15:00
            } elseif ($jamTotal >= 900 && $jamTotal < 1050) {
                echo "$jam = Sore";  // 15:00 - 17:30
            } elseif ($jamTotal >= 1050 && $jamTotal < 1110) {
                echo "$jam = Petang";  // 17:30 - 18:30
            } elseif ($jamTotal >= 1110 && $jamTotal <= 1440) {
                echo "$jam = Malam";  // 18:30 - 24:00
            }
        }
    ?>
</body>
</html>