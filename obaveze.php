<?php
// konekcija
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "ai_tutor"
);

if ($conn->connect_error) {
    die("Greška pri spajanju na bazu: " . $conn->connect_error);
}

// dohvat svih obveza
$sql = "SELECT * FROM obaveze ORDER BY datum_ispita ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Moje obaveze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">

    <h2>AI Tutor</h2>

    <a href="main.html" class="menu-btn">🏠 Početna</a>

    <a href="dodaj_obavezu.html" class="menu-btn">➕ Dodaj obavezu</a>

    <a href="obaveze.php" class="menu-btn">📋 Moje obaveze</a>

    <a href="napredak.html" class="menu-btn">📈 Napredak</a>

</div>

<div class="content">

    <h1>Moje obaveze</h1>

    <div class="cards">

        <?php
        // kreiranje kartica
        if ($result && $result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo '<div class="card">';

                echo '<h3>' . htmlspecialchars($row['predmet']) . '</h3>';

                echo '<p><strong>Datum ispita:</strong> '
                    . htmlspecialchars($row['datum_ispita']) .
                    '</p>';

                echo '<p><strong>Težina gradiva:</strong> '
                    . htmlspecialchars($row['tezina']) .
                    '/5</p>';

                echo '<p><strong>Željena ocjena:</strong> '
                    . htmlspecialchars($row['zeljena_ocjena']) .
                    '</p>';

                echo '<p><strong>Status:</strong> '
                    . htmlspecialchars($row['status_obaveze']) .
                    '</p>';

                if ($row['status_obaveze'] != 'Odrađeno') {

                    echo '<a class="btn"
                    href="oznaci_odradeno.php?id='
                    . $row['id'] .
                    '">✓ Označi kao odrađeno</a>';

                }

                echo '</div>';
            }

        } else {

            echo '<div class="card">';
            echo '<p>Trenutno nema unesenih obaveza.</p>';
            echo '</div>';

        }
        ?>

    </div>

    <br>

    <a href="main.html">← Povratak</a>

</div>

</body>
</html>

<?php
$conn->close();
?>
