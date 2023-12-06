<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include "vendor/autoload.php";
    use App\Animal\Animal;

        $animal = new Animal("gregory");
        echo $animal->getName();

    ?>

</body>

</html>  