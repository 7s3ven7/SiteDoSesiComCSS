<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animação de Movimento</title>
    <style>
    .box {
        width: 100px;
        height: 100px;
        background-color: blue;
        transition: transform 2s ease;
    }

    @keyframes giro {
        to {
            transform: translateX(0px);
            transform: translateY(0px);
        }

        25% {
            transform: translateX(500px);
            transform: translateY(0px);
        }

        50% {
            transform: translateX(400px);
            transform: translateY(400px);
        }

        75% {
            transform: translateX(0px);
            transform: translateY(400px);
        }

        from {
            transform: translateX(0px);
            transform: translateY(0px);
        }
    }

    .box.clicked {
        animation: giro 2s forwards;
    }
    </style>
</head>

<body>
    <div class="box" onclick="this.classList.toggle('clicked')"></div>
</body>

</html>