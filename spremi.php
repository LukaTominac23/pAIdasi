<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "ai_tutor"
);

$predmet = $_POST['predmet'];
$datum = $_POST['datum'];
$tezina = $_POST['tezina'];
$ocjena = $_POST['ocjena'];

$sql = "INSERT INTO obaveze
(predmet, datum_ispita, tezina, zeljena_ocjena)
VALUES
('$predmet','$datum','$tezina','$ocjena')";

if ($conn->query($sql) === TRUE) {
    echo "
    <h2>Obaveza uspješno dodana!</h2>
    <p>Preusmjeravanje na popis obaveza...</p>
    ";
    header("Location: obaveze.php");
    exit;
} else {
    echo "Greška: " . $conn->error;
}
?>