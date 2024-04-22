<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(15, 138, 200), rgb(70, 152, 176), rgb(147, 194, 208) ) ;
        }
        .contenido{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        form{
            margin-top: 10%;
            background-color: rgba(255, 255, 255, 0.61);
            padding: 2%;
            border: solid 2px black;
        }
    </style>
</head>

<body>

    <div class="contenido" >
        <form action="juego.php" method="get">
            <h2>JUEGO DE LA SERPIENTE Y LA ESCALERA</h2>    
            <h4>Ingrese el Nombre de los Jugadores</h4>
            <div>
                <label for="nombre1">Jugador 1</label>
                <input type="text" name="nombre1" required>
            </div><br>
            <div>
                <label for="nombre2">Jugador 2</label>
                <input type="text" name="nombre2" required>
            </div><br>
            <div>
                <label for="nombre3">Jugador 3</label>
                <input type="text" name="nombre3" required>
            </div><br>
            <button type="submit" >JUGAR</button>
        </form>
    </div>
</body>

</html>