<?php require_once('includes/functions.php'); ?>

<?php if(!isUserLoggedIn()) { 
    redirect('login.php');
} ?>

<!DOCTYPE html>

<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <?php include_once('includes/navbar.php'); ?>
        
        <div class="header">
            <p>Services</p>
        </div>
    </head>
    <body>

    <a href="default.asp"><img src="yogap.png" alt="YOGA" style="width:42px;height:42px;"></a>
    
    </body>

    <h1>My Services</h1>

    <footer class="footer">
        <?php require_once('includes/footer.php'); ?>
    </footer>
</html>