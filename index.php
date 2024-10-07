<?php

require "models/user.php";
require "dbBroker.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    //pozvati login metodu
    $korisnik = new User(null, $u, $p);
    //$odg = $korisnik->loginUser($u, $p, $conn);
    $odg = User::loginUser($u, $p, $conn);

    if ($odg->num_rows == 1) {
        $_SESSION['user_id'] = $korisnik->id;
        header('Location: home.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>

<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control" required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>


    </div>
</body>

</html>