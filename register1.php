<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register1.css">
</head>

<body>
    <?php

    include('conn.php');
    if (isset($_REQUEST['password'])) {
        $sql = "SELECT C_ID FROM consumer where C_ID='" . $_REQUEST['C_ID'] . "'";
        $res = $conn->query($sql);

        if ($res->num_rows == 1) {
            echo "email already existed";
        } else {

            if ($_REQUEST['C_ID'] != "" || $_REQUEST['password'] != "") {
                $C_ID = $_REQUEST['C_ID'];
                $password = $_REQUEST['password'];
                $sql = "INSERT INTO `consumer` ( `C_ID`, `password`) VALUES  ('$C_ID','$password')";
                $conn->query($sql);
            } else {
                echo "fill";
            }
        }
    }
    ?>
    <div class="container">
        <h1>Create account</h1>
        <form action="" method="post">
            <p>Username</p>
            <input class="text-box" type="text" name="C_ID" id="name" placeholder="Enter your username">
            <p>password</p>
            <input type="password" name="password" id="password" placeholder="Enter the password">

            <input type="submit" name="button" value="Create account">

        </form>
        <a href="login2.php">back</a>


    </div>

</body>

</html>