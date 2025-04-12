<?php
$apiKey = 'AQUÍ_TU_API_KEY'; // Reemplaza esto cuando tengas la clave
$game = urlencode($_GET['game']);

$url = "https://api.thegamesdb.net/v1.1/Games/ByGameName?apikey=$apiKey&name=$game&fields=players,overview,platform,developers,publishers,genres,boxart&include=boxart";

$response = file_get_contents($url);
$data = json_decode($response, true);

echo "<h1>Resultados para: " . htmlspecialchars($_GET['game']) . "</h1>";

if (isset($data['data']['games'])) {
    foreach ($data['data']['games'] as $game) {
        // Solo mostrar juegos de PlayStation
        if (isset($game['platform']) && strpos(strtolower($game['platform']), 'playstation') !== false) {
            echo "<h2>{$game['game_title']}</h2>";
            if (isset($game['boxart'])) {
                foreach ($game['boxart'] as $img) {
                    if ($img['side'] == 'front') {
                        echo "<img src='https://cdn.thegamesdb.net/images/thumb/{$img['filename']}' alt='Carátula'>";
                        break;
                    }
                }
            } else {
                echo "<p>Sin carátula disponible</p>";
            }
        }
    }
} else {
    echo "<p>No se encontraron resultados.</p>";
}
?>

