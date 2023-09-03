    <?php
        // Loosely data typed = datatype is determined by the value
        $carName = "sedan";     //global scope variable with String datatype

        $cars = array("Chevy", "Honda", "BMW", 4);

        echo json_encode($cars);
        echo implode("/",$cars);
        echo serialize($cars);

        echo "<h2>Car number 1: $cars[0]</h2>";

        $studentName = "Harry";

        $carOne = $cars[1];

        array_push($cars, "Ford");

        echo "cars array after push Ford: " . implode("/",$cars); //. = concatenate
    ?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script> 
        let schoolName = "DMACC";

        <?php
            echo "let studentName = 'Harry'"
        ?>
    </script>
</head>
<body>
    <h1>WDV341 Intro to PHP</h1>
    <h2>PHP Basics and examples</h2>
    <h3>Welcome <?php echo  "new student $studentName"; ?></h3>
    <?php
        echo "<h3>This is an output from PHP on the server</h3>";
        echo "This is a test";
    ?>
    <?php
        echo "let studentName = 'Harry';";
    ?>
    <p>Car number 1: </p>;
</body>
</html>