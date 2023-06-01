<!DOCTYPE HTML>
<html>

<head>
</head>

<body>
    <h2>Menentukan bilangan Ganjil Genap di PHP</h2>

    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        Bilangan : <input type="text" name="bill"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bill = $_POST["bill"];

        if ($bill % 2 == 0) {
            echo "$bill adalah bilangan genap";
        } else {
            echo "$bill adalah bilangan ganjil";
        }
    }

    ?>
</body>

</html>