<?php
// Definir los arrays de nombres, imágenes y audios
$nombres = [
    "El Gallo", "El Diablito", "La Dama", "El Catrín", "El Paraguas", 
    "La Sirena", "La Escalera", "La Botella", "El Barril", "El Árbol", 
    "El Melón", "El Valiente", "El Gorrito", "La Muerte", "La Pera", 
    "La Bandera", "El Bandolón", "El Violoncello", "La Garza", "El Pájaro", 
    "La Mano", "La Bota", "La Luna", "El Cotorro", "El Borracho", 
    "El Negrito", "El Corazón", "La Sandía", "El Tambor", "El Camarón", 
    "Las Jaras", "El Músico", "La Araña", "El Soldado", "La Estrella", 
    "El Cazo", "El Mundo", "El Apache", "El Nopal", "El Alacrán", 
    "La Rosa", "La Calavera", "La Campana", "El Cantarito", "El Venado", 
    "El Sol", "La Corona", "La Chalupa", "El Pino", "El Pescado", 
    "La Palma", "La Maceta", "El Arpa", "La Rana"
];

$imagenes = [
    "assets/imagenes/gallo.jpg", "assets/imagenes/diablito.jpg", "assets/imagenes/dama.jpg", 
    "assets/imagenes/catrin.jpg", "assets/imagenes/paraguas.jpg", "assets/imagenes/sirena.jpg", 
    "assets/imagenes/escalera.jpg", "assets/imagenes/botella.jpg", "assets/imagenes/barril.jpg", 
    "assets/imagenes/arbol.jpg", "assets/imagenes/melon.jpg", "assets/imagenes/valiente.jpg", 
    "assets/imagenes/gorrito.jpg", "assets/imagenes/muerte.jpg", "assets/imagenes/pera.jpg", 
    "assets/imagenes/bandera.jpg", "assets/imagenes/bandolon.jpg", "assets/imagenes/violoncello.jpg", 
    "assets/imagenes/garza.jpg", "assets/imagenes/pajaro.jpg", "assets/imagenes/mano.jpg", 
    "assets/imagenes/bota.jpg", "assets/imagenes/luna.jpg", "assets/imagenes/cotorro.jpg", 
    "assets/imagenes/borracho.jpg", "assets/imagenes/negrito.jpg", "assets/imagenes/corazon.jpg", 
    "assets/imagenes/sandia.jpg", "assets/imagenes/tambor.jpg", "assets/imagenes/camaron.jpg", 
    "assets/imagenes/jaras.jpg", "assets/imagenes/musico.jpg", "assets/imagenes/arana.jpg", 
    "assets/imagenes/soldado.jpg", "assets/imagenes/estrella.jpg", "assets/imagenes/cazo.jpg", 
    "assets/imagenes/mundo.jpg", "assets/imagenes/apache.jpg", "assets/imagenes/nopal.jpg", 
    "assets/imagenes/alacran.jpg", "assets/imagenes/rosa.jpg", "assets/imagenes/calavera.jpg", 
    "assets/imagenes/campana.jpg", "assets/imagenes/cantarito.jpg", "assets/imagenes/venado.jpg", 
    "assets/imagenes/sol.jpg", "assets/imagenes/corona.jpg", "assets/imagenes/chalupa.jpg", 
    "assets/imagenes/pino.jpg", "assets/imagenes/pescado.jpg", "assets/imagenes/palma.jpg", 
    "assets/imagenes/maceta.jpg", "assets/imagenes/arpa.jpg", "assets/imagenes/rana.jpg"
];

$audios = [
    "assets/audios/gallo.mp3", "assets/audios/diablito.mp3", "assets/audios/dama.mp3", 
    "assets/audios/catrin.mp3", "assets/audios/paraguas.mp3", "assets/audios/sirena.mp3", 
    "assets/audios/escalera.mp3", "assets/audios/botella.mp3", "assets/audios/barril.mp3", 
    "assets/audios/arbol.mp3", "assets/audios/melon.mp3", "assets/audios/valiente.mp3", 
    "assets/audios/gorrito.mp3", "assets/audios/muerte.mp3", "assets/audios/pera.mp3", 
    "assets/audios/bandera.mp3", "assets/audios/bandolon.mp3", "assets/audios/violoncello.mp3", 
    "assets/audios/garza.mp3", "assets/audios/pajaro.mp3", "assets/audios/mano.mp3", 
    "assets/audios/bota.mp3", "assets/audios/luna.mp3", "assets/audios/cotorro.mp3", 
    "assets/audios/borracho.mp3", "assets/audios/negrito.mp3", "assets/audios/corazon.mp3", 
    "assets/audios/sandia.mp3", "assets/audios/tambor.mp3", "assets/audios/camaron.mp3", 
    "assets/audios/jaras.mp3", "assets/audios/musico.mp3", "assets/audios/arana.mp3", 
    "assets/audios/soldado.mp3", "assets/audios/estrella.mp3", "assets/audios/cazo.mp3", 
    "assets/audios/mundo.mp3", "assets/audios/apache.mp3", "assets/audios/nopal.mp3", 
    "assets/audios/alacran.mp3", "assets/audios/rosa.mp3", "assets/audios/calavera.mp3", 
    "assets/audios/campana.mp3", "assets/audios/cantarito.mp3", "assets/audios/venado.mp3", 
    "assets/audios/sol.mp3", "assets/audios/corona.mp3", "assets/audios/chalupa.mp3", 
    "assets/audios/pino.mp3", "assets/audios/pescado.mp3", "assets/audios/palma.mp3", 
    "assets/audios/maceta.mp3", "assets/audios/arpa.mp3", "assets/audios/rana.mp3"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartilla Mexicana</title>
    
    <!-- Importar CSS y recursos comunes del sitio -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    
    <style>
        .contenedor {
            display: flex;
            justify-content: space-between;
        }
        .cartilla {
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-gap: 10px;
        }
        .carta {
            width: 100px;
            height: 150px;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightyellow;
            cursor: pointer;
        }
        .carta img {
            width: 90px;
            height: 130px;
        }
        .seleccionada {
            margin-left: 30px;
        }
        .seleccionada img {
            width: 150px;
            height: 220px;
            display: block;
        }
        .boton-audio {
            margin-top: 10px;
        }
        .actualizar-btn {
            margin-top: 50px;
        }
    </style>
    
    <script>
        let nombres = <?php echo json_encode($nombres); ?>;
        let imagenes = <?php echo json_encode($imagenes); ?>;
        let audios = <?php echo json_encode($audios); ?>;
        let cartasBarajadas = []; // Para almacenar la cartilla barajada

        function mostrarCarta(indice, fila, columna) {
            document.getElementById('carta-seleccionada').innerHTML = `
                <h3>Carta Seleccionada</h3>
                <img src="${imagenes[indice]}" alt="${nombres[indice]}">
                <p>Posición: Fila ${fila}, Columna ${columna}</p>
                <button class="boton-audio" onclick="reproducirAudio('${audios[indice]}')">Reproducir Audio</button>
            `;
        }

        function reproducirAudio(audioSrc) {
            const audio = new Audio(audioSrc);
            audio.play();
        }

        function asignarNombres() {
            let cartas = document.getElementsByClassName("carta");
            for (let i = 0; i < cartas.length; i++) {
                cartas[i].setAttribute('title', nombres[i]);
            }
        }

        function barajarCartilla() {
            // Barajar las cartas
            let indices = Array.from(Array(nombres.length).keys());
            indices.sort(() => Math.random() - 0.5);

            cartasBarajadas = indices.slice(0, 16); // Guardar los primeros 16 en la variable cartasBarajadas

            let cartilla = document.getElementById("cartilla");
            cartilla.innerHTML = ""; // Limpiar la cartilla

            let count = 0;
            for (let fila = 1; fila <= 4; fila++) {
                for (let columna = 1; columna <= 4; columna++) {
                    let indice = cartasBarajadas[count];
                    let carta = document.createElement("div");
                    carta.className = "carta";
                    carta.onclick = () => mostrarCarta(indice, fila, columna);
                    carta.innerHTML = `<img src="${imagenes[indice]}" alt="${nombres[indice]}">`;
                    cartilla.appendChild(carta);
                    count++;
                }
            }

            // Ocultar carta seleccionada al barajar
            document.getElementById('carta-seleccionada').innerHTML = "";

            asignarNombres();
        }

        window.onload = barajarCartilla;

        function mostrarCartaPorPosicion() {
    // Obtener valores de columna y fila
    const columna = document.getElementById('columna-input').value;
    const fila = document.getElementById('fila-input').value;

    // Validar que los inputs no estén vacíos
    if (fila === "" || columna === "") {
        alert("Por favor, ingrese valores válidos para la columna y la fila.");
        return;
    }

    // Convertir fila y columna a números
    const filaIndice = parseInt(fila); // Sin -1, ya que ahora es 0-based
    const columnaIndice = parseInt(columna); // Sin -1, ya que ahora es 0-based

    const posicion = (filaIndice * 4) + columnaIndice; // Calcular posición correcta en la cartilla barajada

    // Mostrar la carta seleccionada según la cartilla barajada
    if (posicion >= 0 && posicion < cartasBarajadas.length) {
        const indiceCarta = cartasBarajadas[posicion];
        mostrarCarta(indiceCarta, fila, columna);
    } else {
        alert("Posición fuera de rango");
    }
}

    </script>
</head>
<body>

    <!-- Header similar a index.html -->
    <header id="header" class="header d-flex align-items-center fixed-top visible">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">JUEGOS MEXICANOS</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html">Home</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main id="main" class="main">
        <section id="cartilla-mexicana" class="section">
            <div class="container">
                <button class="btn btn-primary actualizar-btn" onclick="barajarCartilla()">Nueva Cartilla</button>

                <div class="contenedor mt-4">
                    <!-- Cartilla -->
                    <div id="cartilla" class="cartilla">
                        <!-- Aquí se generará la cartilla -->
                    </div>

                    <!-- Cuadros de texto para ingresar columna y fila -->
                    <div class="seleccionada">
                        <h3>Seleccionar carta por posición</h3>
                        <label for="columna-input">Columna:</label>
                        <input type="number" id="columna-input" min="1" max="4" required>

                        <label for="fila-input">Fila:</label>
                        <input type="number" id="fila-input" min="1" max="4" required>

                        <button class="btn btn-primary mt-2" onclick="mostrarCartaPorPosicion()">Mostrar Carta</button>

                        <!-- Carta seleccionada -->
                        <div id="carta-seleccionada" class="seleccionada mt-3">
                            <!-- La carta seleccionada aparecerá aquí -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer similar a index.html -->
    <footer id="footer" class="footer">
        <div class="container text-center">
            <p>© Copyright <strong>Juegos de mesa Mexicanos</strong> Todos los derechos reservados.</p>
            <div class="credits">
                Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- JS común -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
