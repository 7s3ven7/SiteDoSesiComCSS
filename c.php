<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    $numero = $_GET['numero'];
?>

<body>
    <form method="POST" action="a.php?numero=<?php echo $numero;?>">
        <input type="submit">
    </form>
    </form>
    <div>O número é : <?php echo $numero;?></div>
</body>

</html>