<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Used Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/eb85bc995f.js" crossorigin="anonymous"></script>

    <!-- Fonts from Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Blog</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>    

    <div class="auth-content">

        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            <!-- Form Validation - checks for errors in registration -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>

            <div>
                <label>Confirm Password</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>
            
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            
            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>

        </form>
    </div>
   
    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>


</html>