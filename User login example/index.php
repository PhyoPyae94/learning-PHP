<?php
    session_start();
    $auth = isset($_SESSION['auth']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            padding-top: 50px;
        }
        form {
            text-align: center;
            padding-bottom: 100px;
        }
        #wrap {
            width: 500px;
            padding: 20px;
            margin: 10px auto;
            border: 4px solid #ddd;
            background: brown;
        }

    </style>
</head>
<body>
    <div id="wrap">
        <?php if($auth) { ?>
            <p>Welcome your are logined</p>
            <b><?php echo $_SESSION['id'] ?></b>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <h1>You need to login</h1>

            <form action="login.php" method="post">
                <label for="id">Username:</label>
                <input type="text" name="id" id="id" required="required"><br><br>
                <label for="password">password:</label>
                <input type="password" name="password" id="password" required="required">
                <input type="submit" value="submit">
            </form>
        <?php } ?>
    </div>
</body>
</html>