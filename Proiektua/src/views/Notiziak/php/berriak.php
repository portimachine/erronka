<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcreborn</title>
    <link rel="stylesheet" href="../../../../src/css/menu.css">
    <link rel="stylesheet" href="../css/berriak.css">
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
    <h1>Berriak</h1>
    <div class="filter-section">
    <form method="GET">
        <label for="dateFilterFrom">Hasierako data:</label>
        <input type="date" id="dateFilterFrom" name="dateFrom" value="<?php echo isset($_GET['dateFrom']) ? $_GET['dateFrom'] : ''; ?>">
 
        <label for="dateFilterTo">Amaierako data:</label>
        <input type="date" id="dateFilterTo" name="dateTo" value="<?php echo isset($_GET['dateTo']) ? $_GET['dateTo'] : ''; ?>">
        <button aria-label="Filtratu" type="submit" class="filter-button" id="filter-button">Filtratu</button>
    </form>
    </div>
    <div class="filter-section">
               
        <form class="filtroForm" action="berriak.php" method="get">
            <label for="fecha">Data:</label><br>
            <input type="date" id="fecha" name="fecha" value="<?php echo isset($_GET['fecha']) ? $_GET['fecha'] : ''; ?>" required><br>
                   
            <select name="seleccion1" id="lang">
                <option value="aurreragokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'aurreragokoak') echo 'selected="selected"'; ?>>aurreragokoak</option>
                <option value="lehenagokoak" <?php if (isset($_GET['seleccion1']) && $_GET['seleccion1'] === 'lehenagokoak') echo 'selected="selected"'; ?>>lehenagokoak</option>
 
            </select>
            <br>
                     
            <input class="search-button" type="submit" value="Filtratu" />
        </form>
    </div>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "1WMG2023";
     $dbname = "ppcreborn";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Errorea: " . $conn->connect_error);
    }

    $dateFilterFrom = isset($_GET['dateFrom']) && strtotime($_GET['dateFrom']) !== false ? date('Y-m-d', strtotime($_GET['dateFrom'])) : 'all';
    $dateFilterTo = isset($_GET['dateTo']) ? date('Y-m-d', strtotime($_GET['dateTo'])) : 'all';
    $fecha = isset($_GET['fecha']) ? date('Y-m-d', strtotime($_GET['fecha'])) : 'all';
    $lehenGero = (isset($_GET["seleccion1"])) ? $_GET["seleccion1"] : "";

    if ($dateFilterFrom != 'all' && $dateFilterTo != 'all') {
        $sql = "SELECT * FROM berriaka WHERE Data BETWEEN '$dateFilterFrom' AND '$dateFilterTo'";
     } elseif ($lehenGero != 'all' && $lehenGero =="aurreragokoak") {
        $sql = "SELECT * FROM berriaka WHERE Data >= '$fecha'";
     } elseif ($lehenGero != 'all' && $lehenGero =="lehenagokoak") {
        $sql = "SELECT * FROM berriaka WHERE Data <= '$fecha'";
     } else {
        $sql = "SELECT * FROM berriaka";
     }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["Izenburua"] . "</h2>";
            echo "<p>" . $row["Azpizenburua"] . "</p>";
            echo "<p>" . $row["Data"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Ez dago datuak taulan.";
    }

    $conn->close();
    ?>
    <footer>
        © 2023 PCReborn. Eskubide guztiak erreserbatuta.
    </footer>
</body>

</html>