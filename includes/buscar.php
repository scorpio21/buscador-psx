<?php

if (isset($_GET['game'])) {
    $game = urlencode($_GET['game']);
    $apiKey = 'TU_CLAVE_AQUI'; // Reemplaza con tu clave API
    $url = "https://api.thegamesdb.net/v1/Games/ByGameName?name=$game&platform=PlayStation&apikey=$apiKey";
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data['data']) && count($data['data']) > 0) {
        // Procesar los resultados
        $games = [];
        foreach ($data['data'] as $gameData) {
            $games[] = [
                'name' => $gameData['GameTitle'],
                'cover' => $gameData['Images']['thumb'],
                'overview' => $gameData['Overview'] ?? 'Descripción no disponible'
            ];
        }
    } else {
        $error_message = "No se encontraron resultados para '$game'.";
    }
}

?>
