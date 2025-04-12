# 🎮 Buscador de Juegos de PlayStation (PSX)

¡Bienvenido! Este es un pequeño buscador hecho en PHP que permite encontrar carátulas de juegos de **PlayStation** utilizando la API de [TheGamesDB](https://www.thegamesdb.net/).

## 🚀 Características

- Búsqueda por nombre del juego.
- Resultados filtrados solo para la plataforma PlayStation.
- Muestra la carátula frontal (si está disponible).
- Interfaz simple y lista para usar localmente.

## 📸 Captura de pantalla

![captura](docs/captura.jpg) <!-- Asegurate de tener esta imagen en /docs o cambia el path -->

## 🛠️ Requisitos

- PHP 7.x o superior
- Servidor local (XAMPP, WAMP o similar)
- Clave de API de [TheGamesDB](https://forums.thegamesdb.net/viewforum.php?f=4)

## ⚙️ Instalación

1. Cloná el repositorio:
   ```bash
   git clone https://github.com/scorpio21/buscador-psx.git
   ```

2. Colocá tu clave de API en el archivo `buscar.php`:
   ```php
   $apiKey = 'TU_CLAVE_AQUÍ';
   ```

3. Abrí el proyecto en tu servidor local:
   ```
   http://localhost/buscador-psx/
   ```

4. Buscá tu juego favorito 🎮

## 💡 Ejemplo de uso

```url
http://localhost/buscador-psx/buscar.php?game=Crash+Bandicoot
```

## 📁 Estructura del proyecto

```
buscador-psx/
├── index.html
├── buscar.php
└── docs/
    └── captura.jpg
```

## 🧠 Créditos

- API de [TheGamesDB](https://www.thegamesdb.net/)
- Desarrollado por [scorpio21](https://github.com/scorpio21)

## 📜 Licencia

Este proyecto es de uso educativo y personal. Sin fines comerciales.
