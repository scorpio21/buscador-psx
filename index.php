<?php
// Incluimos el archivo de la lógica PHP
include('includes/buscar.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Juegos PSX</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Buscador de Juegos de PlayStation (PSX)</h1>
        
        <!-- Formulario de búsqueda con icono -->
        <form action="" method="GET" class="search-container">
            <input type="text" id="search-input" name="game" placeholder="Buscar juego..." required>
            <button type="submit" class="search-btn">
                <img src="assets/lupa-icon.png" alt="Buscar" class="icono">
                <span>Buscar</span> <!-- Aquí agregas el texto "Buscar" -->
            </button>
        </form>

        <!-- Mensaje de error -->
        <?php if (isset($error_message)) { echo "<div class='error'>$error_message</div>"; } ?>

        <!-- Mostrar resultados -->
        <?php if (isset($games)) { ?>
            <div class="results">
                <h2>Resultados:</h2>
                <div class="results-grid">
                    <?php foreach ($games as $game) { ?>
                        <div class="game-card">
                            <img src="<?php echo $game['cover']; ?>" alt="Carátula">
                            <h3><?php echo htmlspecialchars($game['name']); ?></h3>
                            <p><?php echo $game['overview']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Script de autocompletado (si lo implementamos más tarde) -->
    <!-- <script src="path/to/autocomplete.js"></script> -->
</body>
</html>
