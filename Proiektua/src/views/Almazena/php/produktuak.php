<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcreborn</title>
    <link rel="stylesheet" href="../../../../src/css/menu.css">
    <link rel="stylesheet" href="../css/almazena.css">
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
    <h1>Produktuak</h1>
    <div class="filter-section">
        <form method="GET">
            <label for="categoryFilter">izena:</label>
            <select id="categoryFilter" name="category">
                <option value="all" <?php if (isset($_GET['category']) && $_GET['category'] === 'all') echo 'selected="selected"'; ?>>Dena</option>
                <option value="Prozesadorea" <?php if (isset($_GET['category']) && $_GET['category'] === 'Prozesadorea') echo 'selected="selected"'; ?>>Prozesadoreak</option>
                <option value="Txartel Grafikoa" <?php if (isset($_GET['category']) && $_GET['category'] === 'Txartel Grafikoa') echo 'selected="selected"'; ?>>Txartel Grafikoak</option>
                <option value="Plakabasea" <?php if (isset($_GET['category']) && $_GET['category'] === 'Plakabasea') echo 'selected="selected"'; ?>>Plakabaseak</option>
                <option value="Disko Gogorra" <?php if (isset($_GET['category']) && $_GET['category'] === 'Disko Gogorra') echo 'selected="selected"'; ?>>Disko Gogorrak</option>
                <option value="RAM Memoria" <?php if (isset($_GET['category']) && $_GET['category'] === 'RAM Memoria') echo 'selected="selected"'; ?>>RAM Memoriak</option>
                <option value="Xagua" <?php if (isset($_GET['category']) && $_GET['category'] === 'Xagua') echo 'selected="selected"'; ?>>Xaguak</option>
                <option value="Teklatua" <?php if (isset($_GET['category']) && $_GET['category'] === 'Teklatua') echo 'selected="selected"'; ?>>Teklatuak</option>
                <option value="Ordenagailua" <?php if (isset($_GET['category']) && $_GET['category'] === 'Ordenagailua') echo 'selected="selected"'; ?>>Ordenagailuak</option>
                <option value="Alimentazio Iturria" <?php if (isset($_GET['category']) && $_GET['category'] === 'Alimentazio Iturria') echo 'selected="selected"'; ?>>Alimentazio Iturria</option>
                <option value="Soinu Txartela" <?php if (isset($_GET['category']) && $_GET['category'] === 'Soinu Txartela') echo 'selected="selected"'; ?>>Soinu Txartela</option>
            </select>
            <label for="brandFilter">marka:</label>
            <select id="brandFilter" name="marka">
                <option value="all" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'all') echo 'selected="selected"'; ?>>Dena</option>
                <option value="Gigabyte" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Gigabyte') echo 'selected="selected"'; ?>>Gigabyte</option>
                <option value="MSI " <?php if (isset($_GET['marka']) && $_GET['marka'] === 'MSI ') echo 'selected="selected"'; ?>>MSI </option>
                <option value="Asus" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Asus') echo 'selected="selected"'; ?>>Asus</option>
                <option value="AMD" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'AMD') echo 'selected="selected"'; ?>>AMD</option>
                <option value="Intel" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Intel') echo 'selected="selected"'; ?>>Intel</option>
                <option value="Sapphire" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Sapphire') echo 'selected="selected"'; ?>>Sapphire</option>
                <option value="Corsair" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Corsair') echo 'selected="selected"'; ?>>Corsair</option>
                <option value="Kingston" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Kingston') echo 'selected="selected"'; ?>>Kingston</option>
                <option value="Samsung" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Samsung') echo 'selected="selected"'; ?>>Samsung</option>
                <option value="Sandisk" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Sandisk') echo 'selected="selected"'; ?>>Sandisk</option>
                <option value="Silicon" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Silicon') echo 'selected="selected"'; ?>>Silicon</option>
                <option value="Tempest" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Tempest') echo 'selected="selected"'; ?>>Tempest</option>
                <option value="Forgeon" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Forgeon') echo 'selected="selected"'; ?>>Forgeon</option>
                <option value="NewSkill" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'NewSkill') echo 'selected="selected"'; ?>>NewSkill</option>
                <option value="Apple" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Apple') echo 'selected="selected"'; ?>>Apple</option>
                <option value="Razer" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Razer') echo 'selected="selected"'; ?>>Razer</option>
                <option value="Creative" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Creative') echo 'selected="selected"'; ?>>Creative</option>
                <option value="Epos" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Epos') echo 'selected="selected"'; ?>>Epos</option>
                <option value="StarTech" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'StarTech') echo 'selected="selected"'; ?>>StarTech</option>
                <option value="Logitech" <?php if (isset($_GET['marka']) && $_GET['marka'] === 'Logitech') echo 'selected="selected"'; ?>>Logitech</option>
            </select>

            <label for="priceFilter">Prezioa:</label>
            <input type="number" id="priceFilter" name="price" placeholder="prezio maximoa">

            <br><br>
            <button aria-label="Filtratu" type="submit" class="filter-button" id="filter-button">Filtratu</button>
        </form>
    </div>

    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "1WMG2023";
        $dbname = "ppcreborn";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Errorea: " . $conn->connect_error);
        }

        $categoryFilter = isset($_GET['category']) ? $_GET['category'] : 'all';
        $brandFilter = isset($_GET['marka']) ? $_GET['marka'] : '';
        $priceFilter = isset($_GET['price']) ? $_GET['price'] : '';
        
        $sql = "SELECT * FROM almazena WHERE 1";

        if ($categoryFilter !== 'all') {
            $sql .= " AND izena = '$categoryFilter'";
        }

        if (!empty($brandFilter) && $brandFilter !== 'all') {
            $sql .= " AND marka = '$brandFilter'";
        }

        if (!empty($priceFilter)) {
            $sql .= " AND prezioaS <= $priceFilter";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div> <img src='../../../../public/" . $row["argazkia"] . "' ><br>" . $row["marka"] . "<br>" . $row["modeloa"] . "<br><p class='prezioa'>" . $row["prezioa"] . "€</p></div>";
            }
        } else {
            echo "Ez dago datuak taulan.";
        }

        $conn->close();
        ?>
    </div>
    <br>
    <footer>
        © 2023 PCReborn. Eskubide guztiak erreserbatuta.
    </footer>
</body>

</html>