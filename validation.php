
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-size: 1.5em;
    }
    form {
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    .submit {
        margin-top: 10px;
        background-color: cyan;
        border:1px solid grey;
        height:30px;
    }
    </style>
</head>
<body>
    <form action="validation.php" method="get">
    <label for="name">Name</label>
    <input type="text" name="name" require>
    <label for="email">Email</label>
    <input type="text" name="email" require>
    <label for="age">Age</label>
    <input type="text" name="age" require>
    <input type="submit" value="SUBMIT" class="submit">
    </form>
    <?php
         $name = $_GET["name"];
         $email = $_GET["email"];
         $age = $_GET["age"];
         if(strlen($name) > 3 && stripos( $email, ".") && stripos($email, "@") && is_numeric($age)){
             echo "Accesso riuscito";
         } else {
             echo "Accesso negato";
         };
    ?>
</body>
</html>