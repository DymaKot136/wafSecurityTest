<?php
/* Initialize the session */
session_start();
 
/* Check if the user is logged in, if not then redirect him to login page */
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1 id="usuario">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h1>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <p>
        <form action="" method="get" onsubmit="return false">
            <input type="text" name="buscar" id="buscar">
            <button onclick="buscaText()">Busca</button>
        </form>
        <script>
            function buscaText() {
                var form = document.forms[0];
                document.getElementById('busca').innerHTML = form['buscar'].value;
            }
         </script>
    </p>
    <p id="busca">
        HOLAA
    </p>
</body>
</html>