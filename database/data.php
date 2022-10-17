<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");
    
}
require "../database.php"?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="input-group">
            
        </div>
    </div>
</body>
</html>