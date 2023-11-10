<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcreborn</title>
    <link rel="stylesheet" href="../../../../src/css/menu.css">
    <link rel="stylesheet" href="../css/galdetegia.css">
</head>

<body>
    <header>
        <a class="logo">
            <img src="../../../../public/hasiera1.jpg" alt="logo de la compañía" class="logo-img">
            <h2 id="hasiera">PCreborn</h2>
        </a>
        <nav>
            <ul>
                <li><a href="../../Hasiera/php/erronka.php">Hasiera</a></li>
                <li><a href="../../Almazena/php/produktuak.php">Gure Produktuak</a></li>
                <li><a href="../../Hornitzaileak/php/galdetegia.php">Hornitzaile bihurtu</a></li>
                <li><a href="../../Notiziak/php/berriak.php">Berriak</a></li>
                <li><a href="../../Guri Buruz/php/guriburuz.php">Guri Buruz</a></li>
            </ul>
        </nav>
    </header>
    <h1>Hornitzaile bihurtu</h1>
    <form method="post">
        <label for="tlfzenb">Empresarako Telefono Zenbakia:</label>
        <input type="text" id="tlfzenb" name="tlfzenb" required><br>
        <label for="empresaizena">Empresaren Izena:</label>
        <input type="text" id="empresaizena" name="empresaizena" required><br>
        <label for="korreoa">Empresaren Korreoa:</label>
        <input type="email" id="korreoa" name="korreoa" required><br>
        <label for="empresahel">Empresaren Helbidea:</label>
        <input type="text" id="empresahel" name="empresahel" required><br>
        <label for="nan">NAN:</label>
        <input type="text" id="nan" name="nan" required><br>
        <label for="testua">Hemen nahi duzuna Idatzi</label>
        <textarea id="testua" name="testua"> </textarea><br>
        <input type="submit" value="Hornitzaile bihurtu">
        <input type="reset" value="Ezabatu">
    </form>
    <br>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "taldea";
        $password = "AmetsBeñat_4";
        $dbname = "ppcreborn";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Errorea datu-basearekin konexioan: " . $conn->connect_error);
        }

        $tlfzenb = $_POST["tlfzenb"];
        $empresaizena = $_POST["empresaizena"];
        $korreoa = $_POST["korreoa"];
        $empresahel = $_POST["empresahel"];
        $nan = $_POST["nan"];
        $testua = $_POST["testua"];

        $sql = "INSERT INTO hornitzaileak (EmpresarekoTlfZenbakia, EmpresarenIzena, EmpresarenKorreoa, Helbidea, NAN, Komentarioa) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $tlfzenb, $empresaizena, $korreoa, $empresahel, $nan, $testua);

        if ($stmt->execute()) {
            echo "Datuak zuzen gorde dira.";
        } else {
            echo "Errorea datuak datu-basean sartzerakoan: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <br>
    <br>

    <footer>
        © 2023 PCReborn. Eskubide guztiak erreserbatuta.
    </footer>
</body>

</html>