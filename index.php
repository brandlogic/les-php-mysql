<?php

try {
    $dsn = "mysql:host=" . $_SESSION['host'];
    $pdo = new PDO($dsn, $_SESSION['username'], $_SESSION['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SHOW DATABASES");
    $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch (PDOException $e) {
    $error = "Fout bij verbinden: " . htmlspecialchars($e->getMessage());
    // Optioneel: sessie wissen zodat de gebruiker opnieuw de gegevens kan invoeren
    session_destroy();
}