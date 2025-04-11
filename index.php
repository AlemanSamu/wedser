<?php
class Robon {
    public $nombre;
    public $colorPrincipal;
    public $altura;
    public $energia;

    public function __construct($nombre, $colorPrincipal, $altura, $energia) {
        $this->nombre = $nombre;
        $this->colorPrincipal = $colorPrincipal;
        $this->altura = $altura;
        $this->energia = $energia;
    }

    public function mostrarInfo() {
        return "
        <strong>🤖 Robón:</strong> {$this->nombre}<br>
        <strong>🎨 Colores:</strong> {$this->colorPrincipal}<br>
        <strong>📏 Altura:</strong> {$this->altura} metros<br>
        <strong>⚡ Energía:</strong> {$this->energia}%<br>
        ";
    }
}

$robon1 = new Robon("TitaniumX", "rojo, plata, verde aguamarina y dorado", 2.5, 80);
$info = $robon1->mostrarInfo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Robón</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background-color: #ffffffdd;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            font-size: 26px;
            margin-bottom: 20px;
            color: #6c5ce7;
        }

        .robon-info {
            display: flex;
            gap: 20px;
            align-items: center;
            justify-content: center;
        }

        .robon-info img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            border: 2px solid #6c5ce7;
        }

        .info-text {
            font-size: 18px;
            background-color: #f7f1ff;
            padding: 15px;
            border-radius: 10px;
            border-left: 5px solid #6c5ce7;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title">✨ Información del Robón ✨</div>
    <div class="robon-info">
        <img src="robot.jpg" alt="Imagen del Robón">
        <div class="info-text">
            <?php echo $info; ?>
        </div>
    </div>
</div>

</body>
</html>
