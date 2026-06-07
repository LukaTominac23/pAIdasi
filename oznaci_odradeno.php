<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "ai_tutor",
    3307
);

if ($conn->connect_error) {
    die("Greška pri spajanju na bazu.");
}

$id = (int)$_GET['id'];

$sql = "UPDATE obaveze
        SET status_obaveze='Odrađeno'
        WHERE id=$id";

$conn->query($sql);

header("Location: obaveze.php");
exit();

?>