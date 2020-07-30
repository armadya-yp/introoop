<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OOP PHP</title>
    </head>
    <body>
        <h1>Berlatih OOP PHP</h1>;
        <?php 
            // Bentuk fungsi
            include ('animal.php');
            include ('frog.php');
            include ('ape.php');

            $sheep = new animal("shaun");
            echo "<br>" . $sheep->name;
            echo "<br>" . $sheep->legs;
            echo "<br>" . $sheep->cold_blooded;
            //
            $sungokong = new ape("kera sakti");
            $sungokong =yell();

            //
            $kodok= new frog("buduk");
            $kodok=jump();
        ?>
    </body>
</html>