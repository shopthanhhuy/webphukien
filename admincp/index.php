<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initital-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
<title>Admin CPanel</title>  
</head>  
<body>  
<h3 class="title_admin">Welcome to AdminCP</h3>
    <div class="wrapper">
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
        ?>
    </div>  
</body>  
</html>  