<?php

$notes = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $_POST['note'];
    $notes[] = $note;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Notes App</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

<h2>Tambah Note</h2>

<form method="POST">
    <input type="text" name="note" required>
    <button type="submit">Tambah</button>
</form>

<h3>Daftar Note:</h3>

<ul>
    <?php foreach ($notes as $n): ?>
        <li><?= $n ?></li>
    <?php endforeach; ?>
</ul>

</div>

</body>
</html>