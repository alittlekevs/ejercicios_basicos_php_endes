<?php
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    
    // Mostramos el mensaje de saludo
    echo "<h2>¡Hola, $nombre $apellido!</h2>";
?>