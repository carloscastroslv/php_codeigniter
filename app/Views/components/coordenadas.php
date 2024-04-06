<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obter Coordenadas do Usuário</title>
</head>
<body>
    <p>Clique no botão abaixo para obter suas coordenadas geográficas:</p>
    <button onclick="getLocation()">Obter Coordenadas</button>

    <p id="coordinates"></p>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocalização não é suportada pelo seu navegador.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("coordinates").innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
        }
    </script>
</body>
</html>
