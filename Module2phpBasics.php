<!DOCTYPE html>
<html>
<head>
    <title>PHP and JavaScript Example</title>
</head>
<body>
    <h1>Your Name:</h1>
    <?php
        // Define the PHP variable
        $yourName = "Harry McVey";
    ?>
    <h2><?php echo $yourName; ?></h2>

    <h3>Variables and Total:</h3>
    <?php
        // Define number1 and number2 variables
        $number1 = 5;
        $number2 = 10;

        // Calculate the total
        $total = $number1 + $number2;
    ?>
    <p>Number 1: <?php echo $number1; ?></p>
    <p>Number 2: <?php echo $number2; ?></p>
    <p>Total: <?php echo $total; ?></p>

    <h4>JavaScript Array:</h4>
    <script>
        // Create a JavaScript array from a PHP array
        <?php
            $phpArray = ['PHP', 'HTML', 'Javascript'];
        ?>
        var jsArray = <?php echo json_encode($phpArray); ?>;

        // Display the JavaScript array on the page
        document.write("<ul>");
        jsArray.forEach(function(item) {
            document.write("<li>" + item + "</li>");
        });
        document.write("</ul>");
    </script>
</body>
</html>