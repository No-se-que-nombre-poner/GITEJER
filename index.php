<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>     
    <body>
        <nav id="menu_nav">
            <a href="#">INICIO</a>
            <a href="#">Política de privacidad</a>
            <a href="#">Login</a>
            
        </nav>
        <form id="login" action="ajax/form.php" method="post">
            <label>Usuario:</label>
            <input type="text" name="user">
            <label>Password:</label>
            <input type="text" name="pass">
        </form>
        <?php
            
        ?>
    </body>
</html>
