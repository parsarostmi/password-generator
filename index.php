<?php

$randompassword = '';


function generatepassword()
{
    $chars = '';
    $length = '';


    if (isset($_POST['uppercase'])) {
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    }

    if (isset($_POST['lowercase'])) {
        $chars .= 'abcdefghijklmnopqrstuvwxyz';

    }

    if (isset($_POST['numbers'])) {
        $chars .= '0123456789';

    }

    if (isset($_POST['symbols'])) {
        $chars .= '!@#$%^&*()-_=+';

    }


    if (isset($_POST['length'])) {
        $length = $_POST['length'];
    }


    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }


    return $password;

}






$randompassword = generatepassword();


require_once ('script.js');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <center>
        <div class="container">
            <h1> password generator </h1>
            <form method="post">
                <div class="password-box">
                    <input type="text" id="password" value="<?php echo $randompassword; ?>" readonly>
                    <i class='bx bxs-copy' id="icon" onclick="copyPassword()"></i>
                </div>
                <input type="range" id="length" name="length" max="15" value="<?php $length ?> " oninput="showLength()">
                <span id="lengthDisplay"> 8 </span>


                <div class="checkbox-container"> <input type="checkbox" name="lowercase" checked> <label for="">
                        lowercase
                    </label> </div>
                <div class="checkbox-container"> <input type="checkbox" name="uppercase" <?php if (isset($_POST['uppercase'])) {
                    echo " checked ";
                } ?>> <label for=""> uppercase
                    </label> </div>
                <div class="checkbox-container"> <input type="checkbox" name="symbols" <?php if (isset($_POST['symbols'])) {
                    echo " checked ";
                } ?>> <label for=""> symbols </label>
                </div>
                <div class="checkbox-container"> <input type="checkbox" name="numbers" <?php if (isset($_POST['numbers'])) {
                    echo " checked ";
                } ?>> <label for=""> number </label>
                </div>
                <button name="generate"> generate </button>
            </form>
        </div>
    </center>

</body>

</html>