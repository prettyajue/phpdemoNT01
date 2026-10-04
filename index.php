<?php
    // create a variable that can handle values ($)
    $username = "BSIT NT 3101";
    $user_id = 12345;
    $mother = "Jenny";
    $father = "Gaudencio";
    $siblings = "5";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentPHP DEMO BSIT NT 3101</title>
</head>
<body>
    <!-- <h1>Hello World</h1> -->
     <!-- php interval code -->
    <?php //echo "<h1>Hello World</h1>"; ?>

    <a href="next_page">Go to Next Page</a>
    <h3>
        Username: <u id="displayusername"><?php echo $username; ?></u>
            <br>
        user_id: <u id="displayuserid"><?php echo $user_id; ?></u>
            <br>
        mother: <u id="displaymother"><?php echo $mother; ?></u>
            <br>
        father: <u id="displayfather"><?php echo $father; ?></u>
            <br>
        siblings: <u id="displaysiblings"><?php echo $siblings; ?></u>

<button type="button" onclick="greetUser()">Greet User</button>
<script>
    function greetUser() {
        alert("Hello, <?php echo $username; ?> Your father is: <?php echo $father; ?> and your mother is: <?php echo $mother; ?> and your siblings are: <?php echo $siblings; ?>");

    }
    </script>
</body> 
</html>
